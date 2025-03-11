<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/users",
     *     summary="Listar todos los usuarios",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de usuarios",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/User")
     *         )
     *     )
     * )
     */
    public function index()
    {
        $users = User::with('detail')->get();
        return response()->json([
            'type'    => 'success',
            'message' => 'Usuarios obtenidos correctamente',
            'data'    => $users,
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/api/users",
     *     summary="Crear un nuevo usuario",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "password"},
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123"),
     *             @OA\Property(property="estado", type="boolean", example=true),
     *             @OA\Property(property="tipo_doc", type="string", example="DNI"),
     *             @OA\Property(property="nro_doc", type="string", example="12345678"),
     *             @OA\Property(
     *                 property="detail",
     *                 type="object",
     *                 @OA\Property(property="codigo", type="string", example="12345"),
     *                 @OA\Property(property="nombres", type="string", example="John"),
     *                 @OA\Property(property="apellido_pa", type="string", example="Doe"),
     *                 @OA\Property(property="apellido_ma", type="string", example="Smith"),
     *                 @OA\Property(property="nacionalidad", type="string", example="Mexicana"),
     *                 @OA\Property(property="lugar_nac", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="edo_civil", type="string", example="Soltero"),
     *                 @OA\Property(property="sexo", type="string", example="Masculino"),
     *                 @OA\Property(property="fech_nac", type="string", format="date", example="1990-01-01"),
     *                 @OA\Property(property="edad", type="integer", example=33),
     *                 @OA\Property(property="fech_ingreso", type="string", format="date", example="2023-01-01"),
     *                 @OA\Property(property="nro_solicitud", type="string", example="SOL123"),
     *                 @OA\Property(property="direccion", type="string", example="Calle Falsa 123"),
     *                 @OA\Property(property="ubicacion", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="tel_fijo", type="string", example="5551234567"),
     *                 @OA\Property(property="tel_cel", type="string", example="5557654321"),
     *                 @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *                 @OA\Property(property="centro_estudio", type="string", example="Universidad Nacional"),
     *                 @OA\Property(property="especialidad", type="string", example="Ingenieri­a de Software"),
     *                 @OA\Property(property="profesion", type="string", example="Ingeniero"),
     *                 @OA\Property(property="telefono_empresa", type="string", example="5559876543"),
     *                 @OA\Property(property="centro_laboral", type="string", example="Empresa XYZ"),
     *                 @OA\Property(property="fax_empresa", type="string", example="5559876544"),
     *                 @OA\Property(property="cargo_laboral", type="string", example="Desarrollador"),
     *                 @OA\Property(property="dir_empresa", type="string", example="Avenida Siempre Viva 742")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Usuario creado",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Error de validacion",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validacion"),
     *             @OA\Property(property="errors", type="object",
     *                 @OA\Property(property="name", type="array",
     *                     @OA\Items(type="string", example="El campo nombre es requerido.")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        // Validar los datos del usuario
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8',
            'estado'    => 'sometimes|boolean', 
            'tipo_doc'  => 'nullable|string|max:50',
            'nro_doc'   => 'nullable|string|max:50',
            'detail'    => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Errores de validacion',
                'errors'  => $validator->errors(),
            ], 422);
        }

        // Tomar el valor de 'estado' o establecerlo en true si no viene
        $estado = $request->has('estado') ? $request->estado : true;

        // Crear el usuario
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'estado'   => $estado,
            'tipo_doc' => $request->tipo_doc,
            'nro_doc'  => $request->nro_doc,
        ]);

        // Crear los detalles del usuario si se proporcionan
        if ($request->has('detail')) {
            $user->detail()->create($request->detail);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Usuario creado correctamente',
            'data'    => $user->load('detail'),
        ], 201);
    }

    /**
     * @OA\Get(
     *     path="/api/users/{id}",
     *     summary="Obtener un usuario especi­fico",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Usuario encontrado",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Usuario no encontrado")
     *         )
     *     )
     * )
     */
    public function show($id)
    {
        $user = User::with('detail')->find($id);

        if (!$user) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Usuario obtenido correctamente',
            'data'    => $user,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/api/users/{id}",
     *     summary="Actualizar un usuario",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="newpassword123"),
     *             @OA\Property(property="estado", type="boolean", example=false),
     *             @OA\Property(property="tipo_doc", type="string", example="DNI"),
     *             @OA\Property(property="nro_doc", type="string", example="12345678"),
     *             @OA\Property(property="detail", type="object",
     *                 @OA\Property(property="codigo", type="string", example="12345"),
     *                 @OA\Property(property="nombres", type="string", example="John"),
     *                 @OA\Property(property="apellido_pa", type="string", example="Doe"),
     *                 @OA\Property(property="apellido_ma", type="string", example="Smith"),
     *                 @OA\Property(property="nacionalidad", type="string", example="Mexicana"),
     *                 @OA\Property(property="lugar_nac", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="edo_civil", type="string", example="Soltero"),
     *                 @OA\Property(property="sexo", type="string", example="Masculino"),
     *                 @OA\Property(property="fech_nac", type="string", format="date", example="1990-01-01"),
     *                 @OA\Property(property="edad", type="integer", example=33),
     *                 @OA\Property(property="fech_ingreso", type="string", format="date", example="2023-01-01"),
     *                 @OA\Property(property="nro_solicitud", type="string", example="SOL123"),
     *                 @OA\Property(property="direccion", type="string", example="Calle Falsa 123"),
     *                 @OA\Property(property="ubicacion", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="tel_fijo", type="string", example="5551234567"),
     *                 @OA\Property(property="tel_cel", type="string", example="5557654321"),
     *                 @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *                 @OA\Property(property="centro_estudio", type="string", example="Universidad Nacional"),
     *                 @OA\Property(property="especialidad", type="string", example="Ingenieri­a de Software"),
     *                 @OA\Property(property="profesion", type="string", example="Ingeniero"),
     *                 @OA\Property(property="telefono_empresa", type="string", example="5559876543"),
     *                 @OA\Property(property="centro_laboral", type="string", example="Empresa XYZ"),
     *                 @OA\Property(property="fax_empresa", type="string", example="5559876544"),
     *                 @OA\Property(property="cargo_laboral", type="string", example="Desarrollador"),
     *                 @OA\Property(property="dir_empresa", type="string", example="Avenida Siempre Viva 742")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Usuario actualizado",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Usuario no encontrado")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Error de validacion",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validacion"),
     *             @OA\Property(property="errors", type="object",
     *                 @OA\Property(property="name", type="array",
     *                     @OA\Items(type="string", example="El campo nombre es requerido.")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        // Validar los datos del usuario
        $validator = Validator::make($request->all(), [
            'name'     => 'sometimes|string|max:255',
            'email'    => 'sometimes|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|min:8',
            'estado'   => 'sometimes|boolean',
            'tipo_doc' => 'nullable|string|max:50',
            'nro_doc'  => 'nullable|string|max:50',
            'detail'   => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Errores de validacion',
                'errors'  => $validator->errors(),
            ], 422);
        }

        // Actualizar el usuario
        if ($request->has('name')) {
            $user->name = $request->name;
        }
        if ($request->has('email')) {
            $user->email = $request->email;
        }
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        if ($request->has('estado')) {
            $user->estado = $request->estado;
        }
        if ($request->has('tipo_doc')) {
            $user->tipo_doc = $request->tipo_doc;
        }
        if ($request->has('nro_doc')) {
            $user->nro_doc = $request->nro_doc;
        }

        $user->save();

        // Actualizar los detalles del usuario si se proporcionan
        if ($request->has('detail')) {
            $user->detail()->updateOrCreate([], $request->detail);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Usuario actualizado correctamente',
            'data'    => $user->load('detail'),
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/api/users/{id}/limited",
     *     summary="Actualizar un usuario (campos limitados)",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *             @OA\Property(property="detail", type="object",
     *                 @OA\Property(property="nombres", type="string", example="John"),
     *                 @OA\Property(property="apellido_pa", type="string", example="Doe"),
     *                 @OA\Property(property="apellido_ma", type="string", example="Smith"),
     *                 @OA\Property(property="nacionalidad", type="string", example="Mexicana"),
     *                 @OA\Property(property="lugar_nac", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="edo_civil", type="string", example="Soltero"),
     *                 @OA\Property(property="sexo", type="string", example="Masculino"),
     *                 @OA\Property(property="fech_nac", type="string", format="date", example="1990-01-01"),
     *                 @OA\Property(property="edad", type="integer", example=33),
     *                 @OA\Property(property="direccion", type="string", example="Calle Falsa 123"),
     *                 @OA\Property(property="ubicacion", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="tel_fijo", type="string", example="5551234567"),
     *                 @OA\Property(property="tel_cel", type="string", example="5557654321"),
     *                 @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *                 @OA\Property(property="centro_estudio", type="string", example="Universidad Nacional"),
     *                 @OA\Property(property="especialidad", type="string", example="Ingenieri­a de Software"),
     *                 @OA\Property(property="profesion", type="string", example="Ingeniero"),
     *                 @OA\Property(property="telefono_empresa", type="string", example="5559876543"),
     *                 @OA\Property(property="centro_laboral", type="string", example="Empresa XYZ"),
     *                 @OA\Property(property="fax_empresa", type="string", example="5559876544"),
     *                 @OA\Property(property="cargo_laboral", type="string", example="Desarrollador"),
     *                 @OA\Property(property="dir_empresa", type="string", example="Avenida Siempre Viva 742")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Usuario actualizado",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Usuario no encontrado")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Error de validacion",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validacion"),
     *             @OA\Property(property="errors", type="object",
     *                 @OA\Property(property="name", type="array",
     *                     @OA\Items(type="string", example="El campo nombre es requerido.")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function updateWithoutSensitive(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        // Validar solo los campos permitidos
        $validator = Validator::make($request->all(), [
            'email'  => 'sometimes|string|email|max:255|unique:users,email,' . $user->id,
            'detail' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Errores de validacion',
                'errors'  => $validator->errors(),
            ], 422);
        }

        // Actualizar solo los campos permitidos
        if ($request->has('email')) {
            $user->email = $request->email;
        }
        $user->save();

        if ($request->has('detail')) {
            $user->detail()->updateOrCreate([], $request->detail);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Usuario actualizado correctamente',
            'data'    => $user->load('detail'),
        ], 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/users/{id}",
     *     summary="Eliminar un usuario",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Usuario eliminado"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Usuario no encontrado")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        // Eliminar el usuario y sus detalles
        $user->detail()->delete();
        $user->delete();

        return response()->json(null, 204);
    }

    /**
     * @OA\Post(
     *     path="/api/users/{id}/relative",
     *     summary="Crear un nuevo usuario y asociarlo como pariente. Requiere permisos user_create y user_family_create.",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del usuario principal",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "password", "relationship_type"},
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", format="email", example="john.doe@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123"),
     *             @OA\Property(property="foto", type="string", example="00004"),
     *             @OA\Property(property="relationship_type", type="string", example="son"),
     *             @OA\Property(property="tipo_doc", type="string", example="DNI"),
     *             @OA\Property(property="nro_doc", type="string", example="12345678"),
     *             @OA\Property(property="detail", type="object",
     *                 @OA\Property(property="codigo", type="string", example="12345"),
     *                 @OA\Property(property="nombres", type="string", example="John"),
     *                 @OA\Property(property="apellido_pa", type="string", example="Doe"),
     *                 @OA\Property(property="apellido_ma", type="string", example="Smith"),
     *                 @OA\Property(property="nacionalidad", type="string", example="Mexicana"),
     *                 @OA\Property(property="lugar_nac", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="edo_civil", type="string", example="Soltero"),
     *                 @OA\Property(property="sexo", type="string", example="Masculino"),
     *                 @OA\Property(property="fech_nac", type="string", format="date", example="1990-01-01"),
     *                 @OA\Property(property="edad", type="integer", example=33),
     *                 @OA\Property(property="fech_ingreso", type="string", format="date", example="2023-01-01"),
     *                 @OA\Property(property="nro_solicitud", type="string", example="SOL123"),
     *                 @OA\Property(property="direccion", type="string", example="Calle Falsa 123"),
     *                 @OA\Property(property="ubicacion", type="string", example="Ciudad de Mexico"),
     *                 @OA\Property(property="tel_fijo", type="string", example="5551234567"),
     *                 @OA\Property(property="tel_cel", type="string", example="5557654321"),
     *                 @OA\Property(property="email", type="string", format="email", example="john.relative@example.com"),
     *                 @OA\Property(property="centro_estudio", type="string", example="Universidad Nacional"),
     *                 @OA\Property(property="especialidad", type="string", example="Ingenieri­a de Software"),
     *                 @OA\Property(property="profesion", type="string", example="Ingeniero"),
     *                 @OA\Property(property="telefono_empresa", type="string", example="5559876543"),
     *                 @OA\Property(property="centro_laboral", type="string", example="Empresa XYZ"),
     *                 @OA\Property(property="fax_empresa", type="string", example="5559876544"),
     *                 @OA\Property(property="cargo_laboral", type="string", example="Desarrollador"),
     *                 @OA\Property(property="dir_empresa", type="string", example="Avenida Siempre Viva 742")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Usuario creado y asociado correctamente",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario principal no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Usuario no encontrado")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Error de validacion",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validacion"),
     *             @OA\Property(property="errors", type="object",
     *                 @OA\Property(property="name", type="array",
     *                     @OA\Items(type="string", example="El campo nombre es requerido.")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function storeRelative(Request $request, $id)
    {
        // 1) Verificar que el usuario principal existe
        $principalUser = User::find($id);
        if (!$principalUser) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        // 2) Validar los campos para el nuevo usuario
        $validator = Validator::make($request->all(), [
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:8',
            'foto'              => 'string|max:255',
            'relationship_type' => 'required|string|max:50', 
            'tipo_doc'          => 'nullable|string|max:50',
            'nro_doc'           => 'nullable|string|max:50',
            'detail'            => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Errores de validacion',
                'errors'  => $validator->errors(),
            ], 422);
        }

        // 3) Crear el nuevo usuario
        $newUser = User::create([
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'foto'     => $request->input('foto'),
            'tipo_doc' => $request->input('tipo_doc'),
            'nro_doc'  => $request->input('nro_doc'),
        ]);

        // 4) Asignar el rol "familiar" (Spatie)
        $newUser->assignRole('familiar');

        // Crear el detalle si viene en el request
        if ($request->has('detail')) {
            $newUser->detail()->create($request->input('detail'));
        }

        // 4) Asociar al nuevo usuario como pariente en la tabla pivote
        //    Supongamos que existe una relacion Many-to-Many en el modelo
        //    (por ejemplo, 'relatives') con su pivote 'relationship_type'.
        //    Asegurate de tener la relacion configurada en el modelo User:
        //    $principalUser->relatives()->attach($newUser->id, [...])
        //    Ajusta el nombre de la relacion y pivote segun tu modelo.
        $principalUser->relatives()->attach($newUser->id, [
            'relationship_type' => $request->input('relationship_type'),
        ]);

        // 5) Responder en JSON
        return response()->json([
            'type'    => 'success',
            'message' => 'Usuario creado y asociado correctamente',
            'data'    => $newUser->load('detail'),
        ], 201);
    }

    /**
     * @OA\Get(
     *     path="/api/users/{id}/relatives",
     *     summary="Obtener todos los familiares asociados a un usuario",
     *     description="Devuelve una lista de los usuarios que son familiares del usuario principal, junto con sus detalles y tipo de relacion.",
     *     tags={"Usuarios"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del usuario principal",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista de familiares encontrada",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Familiares obtenidos correctamente"),
     *             @OA\Property(property="data", type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="id", type="integer", example=2),
     *                     @OA\Property(property="name", type="string", example="John Relative"),
     *                     @OA\Property(property="email", type="string", example="john.relative@example.com"),
     *                     @OA\Property(property="pivot", type="object",
     *                         @OA\Property(property="relationship_type", type="string", example="son")
     *                     ),
     *                     @OA\Property(property="detail", type="object",
     *                         @OA\Property(property="nombres", type="string", example="John"),
     *                         @OA\Property(property="apellido_pa", type="string", example="Doe"),
     *                         @OA\Property(property="apellido_ma", type="string", example="Smith")
     *                        
     *                     )
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Usuario no encontrado")
     *         )
     *     )
     * )
     */
    public function listRelatives($id)
    {
        // 1) Buscar al usuario principal
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        // 2) Cargar a sus familiares (relatives) + detalles
        //    ->withPivot('relationship_type') se define en la relacion del modelo,
        //    pero al convertir a JSON, veras un nodo "pivot" con la informacion.
        $relatives = $user->relatives()->with('detail')->get();

        // 3) Responder en JSON
        return response()->json([
            'type'    => 'success',
            'message' => 'Familiares obtenidos correctamente',
            'data'    => $relatives,
        ], 200);
    }

    /**
     * @OA\Get(
     *     path="/api/users/codigo/{codigo}",
     *     summary="Obtener un usuario especi­fico por codigo",
     *     tags={"Usuarios"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="codigo",
     *         in="path",
     *         required=true,
     *         description="Codigo del usuario (almacenado en user_details)",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Usuario encontrado",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Usuario no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Usuario no encontrado")
     *         )
     *     )
     * )
     */
    public function showByCodigo($codigo)
    {
        // Buscar en la tabla de detalles donde el codigo coincida
        $detail = UserDetail::where('codigo', $codigo)->first();

        if (!$detail) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        // Obtener el usuario con sus detalles
        $user = User::with('detail')->find($detail->user_id);

        if (!$user) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Usuario obtenido correctamente',
            'data'    => $user,
        ], 200);
    }
}

