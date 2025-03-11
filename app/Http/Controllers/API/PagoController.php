<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagoController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/pagos",
     *     summary="Listar todos los pagos",
     *     tags={"Pagos"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de pagos",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Pagos obtenidos correctamente"),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(type="object",
     *                     @OA\Property(property="id", type="integer", example=1),
     *                     @OA\Property(property="user_id", type="integer", example=2),
     *                     @OA\Property(property="concepto", type="string", example="Cuota mantenimiento"),
     *                     @OA\Property(property="fecha", type="string", example="2024-02-10"),
     *                     @OA\Property(property="vence", type="string", example="2024-02-20"),
     *                     @OA\Property(property="documento", type="string", example="03/B002-0058037"),
     *                     @OA\Property(property="currency_id", type="integer", example=1),
     *                     @OA\Property(property="importe", type="number", format="float", example=290.00),
     *                     @OA\Property(property="estado", type="string", example="Pagado"),
     *                     @OA\Property(
     *                         property="user",
     *                         type="object",
     *                         description="Datos del usuario relacionados (opcional si has usado with('user'))"
     *                     ),
     *                     @OA\Property(
     *                         property="currency",
     *                         type="object",
     *                         description="Datos de la moneda relacionados (opcional si has usado with('currency'))"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        // Obtenemos todos los pagos con las relaciones de user y currency
        $pagos = Pago::with(['user', 'currency'])->get();

        return response()->json([
            'type'    => 'success',
            'message' => 'Pagos obtenidos correctamente',
            'data'    => $pagos,
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/api/pagos",
     *     summary="Crear un nuevo pago",
     *     tags={"Pagos"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"user_id", "concepto", "fecha", "importe", "estado", "currency_id"},
     *             @OA\Property(property="user_id", type="integer", example=1),
     *             @OA\Property(property="concepto", type="string", example="Cuota mantenimiento"),
     *             @OA\Property(property="fecha", type="string", format="date", example="2024-02-10"),
     *             @OA\Property(property="vence", type="string", format="date", example="2024-02-20"),
     *             @OA\Property(property="documento", type="string", example="03/B002-0058037"),
     *             @OA\Property(property="currency_id", type="integer", example=1),
     *             @OA\Property(property="importe", type="number", format="float", example=290.00),
     *             @OA\Property(property="estado", type="string", example="Pendiente")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Pago creado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Pago creado correctamente"),
     *             @OA\Property(property="data", type="object",
     *                 @OA\Property(property="id", type="integer", example=10),
     *                 @OA\Property(property="user_id", type="integer", example=1),
     *                 @OA\Property(property="concepto", type="string", example="Cuota mantenimiento"),
     *                 @OA\Property(property="fecha", type="string", example="2024-02-10"),
     *                 @OA\Property(property="vence", type="string", example="2024-02-20"),
     *                 @OA\Property(property="documento", type="string", example="03/B002-0058037"),
     *                 @OA\Property(property="currency_id", type="integer", example=1),
     *                 @OA\Property(property="importe", type="number", format="float", example=290.00),
     *                 @OA\Property(property="estado", type="string", example="Pendiente")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Error de validaciÃ³n",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validaciÃ³n"),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        // Validar los datos
        $validator = Validator::make($request->all(), [
            'user_id'     => 'required|exists:users,id',
            'concepto'    => 'required|string|max:255',
            'fecha'       => 'required|date',
            'vence'       => 'nullable|date',
            'documento'   => 'nullable|string|max:255',
            'currency_id' => 'required|exists:currencies,id',
            'importe'     => 'required|numeric',
            'estado'      => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Errores de validaciÃ³n',
                'errors'  => $validator->errors(),
            ], 422);
        }

        // Crear el pago
        $pago = Pago::create($request->all());

        return response()->json([
            'type'    => 'success',
            'message' => 'Pago creado correctamente',
            'data'    => $pago,
        ], 201);
    }

    /**
     * @OA\Get(
     *     path="/api/pagos/{id}",
     *     summary="Obtener un pago especÃ­fico",
     *     tags={"Pagos"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del pago",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Pago encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Pago obtenido correctamente"),
     *             @OA\Property(property="data", type="object",
     *                 @OA\Property(property="id", type="integer", example=10),
     *                 @OA\Property(property="user_id", type="integer", example=1),
     *                 @OA\Property(property="concepto", type="string", example="Cuota mantenimiento"),
     *                 @OA\Property(property="fecha", type="string", example="2024-02-10"),
     *                 @OA\Property(property="vence", type="string", example="2024-02-20"),
     *                 @OA\Property(property="documento", type="string", example="03/B002-0058037"),
     *                 @OA\Property(property="currency_id", type="integer", example=1),
     *                 @OA\Property(property="importe", type="number", format="float", example=290.00),
     *                 @OA\Property(property="estado", type="string", example="Pagado")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pago no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Pago no encontrado")
     *         )
     *     )
     * )
     */
    public function show($id)
    {
        $pago = Pago::with(['user', 'currency'])->find($id);

        if (!$pago) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Pago no encontrado',
            ], 404);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Pago obtenido correctamente',
            'data'    => $pago,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/api/pagos/{id}",
     *     summary="Actualizar un pago",
     *     tags={"Pagos"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del pago",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="user_id", type="integer", example=1),
     *             @OA\Property(property="concepto", type="string", example="Cuota mantenimiento"),
     *             @OA\Property(property="fecha", type="string", format="date", example="2024-02-10"),
     *             @OA\Property(property="vence", type="string", format="date", example="2024-02-20"),
     *             @OA\Property(property="documento", type="string", example="03/B002-0058037"),
     *             @OA\Property(property="currency_id", type="integer", example=1),
     *             @OA\Property(property="importe", type="number", format="float", example=290.00),
     *             @OA\Property(property="estado", type="string", example="Pendiente")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Pago actualizado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Pago actualizado correctamente"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pago no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Pago no encontrado")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Error de validaciÃ³n",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validaciÃ³n"),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $pago = Pago::find($id);

        if (!$pago) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Pago no encontrado',
            ], 404);
        }

        // Validar
        $validator = Validator::make($request->all(), [
            'user_id'     => 'sometimes|exists:users,id',
            'concepto'    => 'sometimes|string|max:255',
            'fecha'       => 'sometimes|date',
            'vence'       => 'sometimes|date|nullable',
            'documento'   => 'sometimes|nullable|string|max:255',
            'currency_id' => 'sometimes|exists:currencies,id',
            'importe'     => 'sometimes|numeric',
            'estado'      => 'sometimes|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Errores de validaciÃ³n',
                'errors'  => $validator->errors(),
            ], 422);
        }

        // Actualizar sÃ³lo los campos que lleguen
        if ($request->has('user_id')) {
            $pago->user_id = $request->user_id;
        }
        if ($request->has('concepto')) {
            $pago->concepto = $request->concepto;
        }
        if ($request->has('fecha')) {
            $pago->fecha = $request->fecha;
        }
        if ($request->has('vence')) {
            $pago->vence = $request->vence;
        }
        if ($request->has('documento')) {
            $pago->documento = $request->documento;
        }
        if ($request->has('currency_id')) {
            $pago->currency_id = $request->currency_id;
        }
        if ($request->has('importe')) {
            $pago->importe = $request->importe;
        }
        if ($request->has('estado')) {
            $pago->estado = $request->estado;
        }

        $pago->save();

        return response()->json([
            'type'    => 'success',
            'message' => 'Pago actualizado correctamente',
            'data'    => $pago,
        ], 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/pagos/{id}",
     *     summary="Eliminar un pago",
     *     tags={"Pagos"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del pago",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Pago eliminado"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pago no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Pago no encontrado")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $pago = Pago::find($id);

        if (!$pago) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Pago no encontrado',
            ], 404);
        }

        $pago->delete();

        // Se recomienda retornar un 200 o 204 sin contenido.
        return response()->json(null, 204);
    }

    /**
     * @OA\Get(
     *     path="/api/pagos/user/{user_id}",
     *     summary="Listar pagos de un usuario especÃ­fico con paginaciÃ³n",
     *     tags={"Pagos"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="user_id",
     *         in="path",
     *         required=true,
     *         description="ID del usuario",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         required=false,
     *         description="NÃºmero de pÃ¡gina de la paginaciÃ³n (por defecto 1)",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         required=false,
     *         description="Cantidad de registros por pÃ¡gina (por defecto 10)",
     *         @OA\Schema(type="integer", example=10)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Lista paginada de pagos del usuario",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Pagos del usuario obtenidos correctamente"),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(property="current_page", type="integer", example=1),
     *                 @OA\Property(property="data", type="array",
     *                     @OA\Items(type="object",
     *                         @OA\Property(property="id", type="integer", example=1),
     *                         @OA\Property(property="user_id", type="integer", example=2),
     *                         @OA\Property(property="concepto", type="string", example="Cuota mantenimiento"),
     *                         @OA\Property(property="fecha", type="string", example="2024-02-10"),
     *                         @OA\Property(property="vence", type="string", example="2024-02-20"),
     *                         @OA\Property(property="documento", type="string", example="03/B002-0058037"),
     *                         @OA\Property(property="currency_id", type="integer", example=1),
     *                         @OA\Property(property="importe", type="number", format="float", example=290.00),
     *                         @OA\Property(property="estado", type="string", example="Pagado"),
     *                     )
     *                 ),
     *                 @OA\Property(property="total", type="integer", example=30),
     *                 @OA\Property(property="per_page", type="integer", example=10),
     *                 @OA\Property(property="last_page", type="integer", example=3),
     *                 @OA\Property(property="from", type="integer", example=1),
     *                 @OA\Property(property="to", type="integer", example=10)
     *             )
     *         )
     *     )
     * )
     */
    public function getPagosByUser(Request $request, $user_id)
    {
        // Validamos que el usuario existe (opcional, si gustas).
        // Suponiendo que la entidad User se encarga de validarse en tu proyecto,
        // de lo contrario puedes hacer un check antes:
        // if (!User::find($user_id)) {
        //     return response()->json([
        //         'type' => 'error',
        //         'message' => 'Usuario no encontrado'
        //     ], 404);
        // }

        // Usamos limit de la query, por defecto 10.
        $limit = $request->query('limit', 10);

        // Obtener los pagos filtrados por usuario, con sus relaciones
        // Laravel automÃ¡ticamente toma el parÃ¡metro ?page=X para la paginaciÃ³n
        $pagos = Pago::with(['user', 'currency'])
            ->where('user_id', $user_id)
            ->paginate($limit);

        return response()->json([
            'type'    => 'success',
            'message' => 'Pagos del usuario obtenidos correctamente',
            'data'    => $pagos,
        ], 200);
    }
}
