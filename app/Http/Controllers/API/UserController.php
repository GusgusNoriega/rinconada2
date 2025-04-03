<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    private $repository;
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->repository = new UserRepository();
    }
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
        return $this->repository->getAllUsers();
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
        return $this->repository->createUser($request);
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
        return $this->repository->getDetailById($id);
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
        return $this->repository->updateUser($request, $id);
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
        return $this->repository->updateWithoutSensitiveData($request, $id);
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
        return $this->repository->deleteUser($id);
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
        return $this->repository->createRelativeUser($request, $id);
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
        return $this->repository->getRelativeUsers($id);
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
        return $this->repository->findByCode($codigo);
    }
}
