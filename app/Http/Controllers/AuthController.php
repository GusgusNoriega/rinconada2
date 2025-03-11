<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use OpenApi\Annotations as OA;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    /**
     * @OA\Schema(
     *     schema="User",
     *     type="object",
     *     title="Usuario",
     *     description="Modelo de usuario",
     *     @OA\Property(property="id", type="integer", example=1),
     *     @OA\Property(property="name", type="string", example="John Doe"),
     *     @OA\Property(property="email", type="string", format="email", example="john.doe@example.com")
     * )
     *
     * @OA\Post(
     *     path="/api/login",
     *     summary="Iniciar sesion de usuario",
     *     description="Permite al usuario iniciar sesion mediante nro_doc y password, y obtener un token de acceso. 
     *                  Tambien se encarga de eliminar tokens antiguos (mas de 1 dia) y mantener un maximo de 3 tokens por usuario.",
     *     tags={"Sesion"},
     *
     *     @OA\RequestBody(
     *         required=true,
     *         description="Credenciales de inicio de sesion",
     *         @OA\JsonContent(
     *             required={"nro_doc","password"},
     *             @OA\Property(property="nro_doc", type="string", example="12345678"),
     *             @OA\Property(property="password", type="string", format="password", example="password123")
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="Inicio de sesion exitoso",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Inicio de sesion exitoso"),
     *             @OA\Property(property="data", type="object",
     *                 @OA\Property(property="access_token", type="string", example="1|xyz..."),
     *                 @OA\Property(property="token_type", type="string", example="Bearer"),
     *                 @OA\Property(property="user", type="object",
     *                     @OA\Property(property="id", type="integer", example=1),
     *                     @OA\Property(property="name", type="string", example="John Doe"),
     *                     @OA\Property(property="email", type="string", example="john.doe@example.com")
     *                 )
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Credenciales invalidas",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Credenciales invalidas")
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=422,
     *         description="Errores de validacion",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validacion"),
     *             @OA\Property(
     *                 property="errors",
     *                 type="object",
     *                 @OA\Property(
     *                     property="nro_doc",
     *                     type="array",
     *                     @OA\Items(type="string", example="El campo nro_doc es requerido.")
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="array",
     *                     @OA\Items(type="string", example="El campo password es requerido.")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function login(Request $request)
    {
        // Validacion de los datos de entrada
        $validator = Validator::make($request->all(), [
            'nro_doc' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'type'    => 'error',
                    'message' => 'Errores de validacion',
                    'errors'  => $validator->errors()
                ], 422);
            }
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        // Intentar autenticar
        $credentials = ['nro_doc' => $request->nro_doc, 'password' => $request->password];
        if (!Auth::attempt($credentials)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'type'    => 'error',
                    'message' => 'Credenciales invalidas'
                ], 401);
            }
            return redirect()->back()
                             ->withErrors(['nro_doc' => 'Nro de documento o contraseña no validos'])
                             ->withInput();
        }

        $user = Auth::user();

        // Eliminar tokens antiguos (mas de 1 dia)
        $user->tokens()
             ->where('created_at', '<', now()->subDay())
             ->delete();

        // Mantener un maximo de 3 tokens
        if ($user->tokens()->count() >= 3) {
            $user->tokens()->oldest()->first()->delete();
        }

        // Crear nuevo token
        $token = $user->createToken('token-login')->plainTextToken;

        // Respuesta para API
        if ($request->expectsJson()) {
            return response()->json([
                'type'    => 'success',
                'message' => 'Inicio de sesion exitoso',
                'data'    => [
                    'access_token' => $token,
                    'token_type'   => 'Bearer',
                    'user'         => $user->only(['id', 'name', 'email']),
                ]
            ], 200);
        }

        // Respuesta para Web
        session(['access_token' => $token]);
        return redirect()->route('perfil');
    }

    /**
     * Cierra la sesion del usuario y elimina su token de acceso.
     *
     * @OA\Post(
     *     path="/api/logout",
     *     summary="Cerrar sesion",
     *     description="Cierra la sesion del usuario y revoca su token de acceso.",
     *     tags={"Sesion"},
     *     security={{"bearerAuth":{}}},
     *
     *     @OA\Response(
     *         response=200,
     *         description="Sesion cerrada correctamente",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Sesion cerrada correctamente")
     *         )
     *     )
     * )
     */
    public function logout(Request $request)
    {
        if ($request->expectsJson()) {
            $user = $request->user();
            $user->tokens()->delete();
            return response()->json([
                'type'    => 'success',
                'message' => 'Sesion cerrada correctamente'
            ], 200);
        }

        if (session()->has('access_token')) {
            $token = session('access_token');
            $tokenInstance = PersonalAccessToken::findToken($token);
            if ($tokenInstance) {
                $tokenInstance->delete();
            }
        }

        Auth::logout();
        Session::flush();
        return redirect('/login');
    }

    /**
     * Muestra la vista del perfil del usuario autenticado.
     */
    public function perfil()
    {
        return view('perfil');
    }

    /**
     * @OA\Post(
     *     path="/api/change-password",
     *     summary="Cambiar la contraseña del usuario autenticado",
     *     description="Permite al usuario autenticado cambiar su contraseña, validando la contraseña actual.",
     *     tags={"Sesion"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Datos para cambiar la contraseña",
     *         @OA\JsonContent(
     *             required={"current_password","new_password"},
     *             @OA\Property(property="current_password", type="string", format="password", example="oldpassword123"),
     *             @OA\Property(property="new_password", type="string", format="password", example="newpassword123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Contraseña actualizada correctamente",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Â¡Contraseña actualizada con exito!")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Error de validacion o contraseña actual incorrecta",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="La contraseña actual no coincide o error de validacion"),
     *             @OA\Property(property="errors", type="object",
     *                 @OA\Property(property="current_password", type="array",
     *                     @OA\Items(type="string", example="El campo current_password es requerido.")
     *                 ),
     *                 @OA\Property(property="new_password", type="array",
     *                     @OA\Items(type="string", example="El campo new_password es requerido.")
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No autenticado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Token invalido o no enviado")
     *         )
     *     )
     * )
     */
    public function changePassword(Request $request)
    {
        // 1) Validar campos de entrada
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password'     => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Error de validacion',
                'errors'  => $validator->errors()
            ], 422);
        }

        // 2) Obtener el usuario autenticado
        $user = Auth::user();

        // 3) Verificar que la contraseña actual sea correcta
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'type'    => 'error',
                'message' => 'La contraseña actual no coincide'
            ], 422);
        }

        // 4) Actualizar la contraseña
        $user->password = Hash::make($request->new_password);
        $user->force_password_change = true;
        $user->save();

        // 5) Responder con exito
        return response()->json([
            'type'    => 'success',
            'message' => 'Â¡Contraseña actualizada con exito!'
        ], 200);
    }
}

