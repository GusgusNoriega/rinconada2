<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * @OA\Schema(
 *     schema="Role",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="admin"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2023-10-01T12:00:00.000000Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2023-10-01T12:00:00.000000Z")
 * )
 *
 * @OA\Schema(
 *     schema="Permission",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="edit posts"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2023-10-01T12:00:00.000000Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2023-10-01T12:00:00.000000Z")
 * )
 */

class RoleController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/roles",
     *     summary="Listar todos los roles",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="NÃºmero de pÃ¡gina",
     *         required=false,
     *         @OA\Schema(type="integer", default=1)
     *     ),
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Cantidad de roles por pÃ¡gina",
     *         required=false,
     *         @OA\Schema(type="integer", default=10)
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Lista de roles paginada",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Roles obtenidos correctamente"),
     *             @OA\Property(property="data", type="object",
     *                 @OA\Property(property="roles", type="array", @OA\Items(ref="#/components/schemas/Role")),
     *                 @OA\Property(property="pagination", type="object",
     *                     @OA\Property(property="current_page", type="integer", example=1),
     *                     @OA\Property(property="per_page", type="integer", example=10),
     *                     @OA\Property(property="total", type="integer", example=50)
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $roles = Role::paginate($perPage);

        return response()->json([
            'type'    => 'success',
            'message' => 'Roles obtenidos correctamente',
            'data'    => [
                'roles'      => $roles->items(),
                'pagination' => [
                    'current_page' => $roles->currentPage(),
                    'per_page'     => $roles->perPage(),
                    'total'        => $roles->total(),
                ],
            ],
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/api/roles",
     *     summary="Crear un nuevo rol",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string", example="admin")
     *         )
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="Rol creado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Rol creado correctamente"),
     *             @OA\Property(property="data", type="object", ref="#/components/schemas/Role")
     *         )
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="Error de validaciÃ³n",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validaciÃ³n"),
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
        $request->validate([
            'name' => 'required|string|unique:roles,name',
        ]);

        $role = Role::create(['name' => $request->name]);

        return response()->json([
            'type'    => 'success',
            'message' => 'Rol creado correctamente',
            'data'    => $role,
        ], 201);
    }

    /**
     * @OA\Get(
     *     path="/api/roles/{id}",
     *     summary="Obtener un rol especÃ­fico",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del rol",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Rol encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Rol obtenido correctamente"),
     *             @OA\Property(property="data", type="object", ref="#/components/schemas/Role")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Rol no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Rol no encontrado")
     *         )
     *     )
     * )
     */
    public function show($id)
    {
        $role = Role::find($id);

        if (!$role) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Rol no encontrado',
            ], 404);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Rol obtenido correctamente',
            'data'    => $role,
        ], 200);
    }

    /**
     * @OA\Put(
     *     path="/api/roles/{id}",
     *     summary="Actualizar un rol",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del rol",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string", example="editor")
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Rol actualizado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Rol actualizado correctamente"),
     *             @OA\Property(property="data", type="object", ref="#/components/schemas/Role")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Rol no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Rol no encontrado")
     *         )
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="Error de validaciÃ³n",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validaciÃ³n"),
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
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id,
        ]);

        $role = Role::find($id);

        if (!$role) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Rol no encontrado',
            ], 404);
        }

        $role->update(['name' => $request->name]);

        return response()->json([
            'type'    => 'success',
            'message' => 'Rol actualizado correctamente',
            'data'    => $role,
        ], 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/roles/{id}",
     *     summary="Eliminar un rol",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del rol",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="204",
     *         description="Rol eliminado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Rol eliminado correctamente")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Rol no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Rol no encontrado")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $role = Role::find($id);

        if (!$role) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Rol no encontrado',
            ], 404);
        }

        $role->delete();

        return response()->json([
            'type'    => 'success',
            'message' => 'Rol eliminado correctamente',
        ], 204);
    }

    /**
     * @OA\Get(
     *     path="/api/permissions",
     *     summary="Listar todos los permisos",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response="200",
     *         description="Lista de permisos",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Permisos obtenidos correctamente"),
     *             @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/Permission"))
     *         )
     *     )
     * )
     */
    public function indexPermissions()
    {
        $permissions = Permission::all();

        return response()->json([
            'type'    => 'success',
            'message' => 'Permisos obtenidos correctamente',
            'data'    => $permissions,
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/api/permissions",
     *     summary="Crear un nuevo permiso",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string", example="edit posts")
     *         )
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="Permiso creado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Permiso creado correctamente"),
     *             @OA\Property(property="data", type="object", ref="#/components/schemas/Permission")
     *         )
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="Error de validaciÃ³n",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Errores de validaciÃ³n"),
     *             @OA\Property(property="errors", type="object",
     *                 @OA\Property(property="name", type="array",
     *                     @OA\Items(type="string", example="El campo nombre es requerido.")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:permissions,name',
        ]);

        $permission = Permission::create(['name' => $request->name]);

        return response()->json([
            'type'    => 'success',
            'message' => 'Permiso creado correctamente',
            'data'    => $permission,
        ], 201);
    }

    /**
     * @OA\Delete(
     *     path="/api/permissions/{id}",
     *     summary="Eliminar un permiso",
     *     tags={"Roles"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID del permiso",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="204",
     *         description="Permiso eliminado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Permiso eliminado correctamente")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Permiso no encontrado",
     *         @OA\JsonContent(
     *             @OA\Property(property="type", type="string", example="error"),
     *             @OA\Property(property="message", type="string", example="Permiso no encontrado")
     *         )
     *     )
     * )
     */
    public function destroyPermission($id)
    {
        $permission = Permission::find($id);

        if (!$permission) {
            return response()->json([
                'type'    => 'error',
                'message' => 'Permiso no encontrado',
            ], 404);
        }

        $permission->delete();

        return response()->json([
            'type'    => 'success',
            'message' => 'Permiso eliminado correctamente',
        ], 204);
    }
}