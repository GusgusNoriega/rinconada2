<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserRepository
{
    use ResponseTrait;

    /**
     * Get use users with their details.
     *
     * @return \Illuminate\Http\JsonResponse
     */


    public function getAllUsers($limit = null)
    {
        if ($limit) {
            $users = User::with('detail')->paginate($limit);
        } else {
            $users = User::with('detail')->get();
        }

        if ($users->isEmpty()) {
            return $this->error('No se encontraron usuarios', 404);
        }

        return $this->success('Usuarios obtenidos correctamente', $users, 200);
    }


    public function getDetailById($id)
    {
        $user = User::with('detail')->find($id);

        if (!$user) {

            return $this->error('Usuario no encontrado', 404);
        }

        return $this->success('Usuario obtenido correctamente', $user, 200);
    }

    public function createUser(Request $request)
    {

        try {

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
                return $this->errorValidation('Errores de validacion', $validator->errors(), 422);
            }

            $estado =  $request->estado ?? true;

            $user = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => bcrypt($request->password),
                'estado'   => $estado,
                'tipo_doc' => $request->tipo_doc,
                'nro_doc'  => $request->nro_doc,
            ]);


            if ($request->has('detail')) {
                $user->detail()->create($request->detail);
            }

            return $this->success('Usuario creado correctamente', $user->load('detail'), 201);
        } catch (\Exception $e) {

            Log::error("Error creating user: " . $e->getMessage());
            return $this->error('Error al crear el usuario', 500);
        }
    }


    // Update user
    public function updateUser(Request $request, $id)
    {
        try {

            $user = User::find($id);

            if (!$user) {
                $this->error('Usuario no encontrado', 404);
            }

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

                $this->errorValidation('Errores de validacion', $validator->errors(), 422);
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

            if ($request->has('detail')) {
                $user->detail()->updateOrCreate([], $request->detail);
            }

            $this->success('Usuario actualizado correctamente', $user->load('detail'), 200);
        } catch (\Exception $e) {

            Log::error("Error updating user: " . $e->getMessage());
            return $this->error('Error al actualizar el usuario', 500);
        }
    }

    public function updateWithoutSensitiveData(Request $request, $id)
    {
        try {

            $user = User::find($id);

            if (!$user) {
                return $this->error('Usuario no encontrado', 404);
            }

            // Validar solo los campos permitidos
            $validator = Validator::make($request->all(), [
                'email'  => 'sometimes|string|email|max:255|unique:users,email,' . $user->id,
                'detail' => 'nullable|array',
            ]);

            if ($validator->fails()) {

                return $this->errorValidation('Errores de validacion', $validator->errors(), 422);
            }


            if ($request->has('email')) {
                $user->email = $request->email;
            }
            $user->save();

            if ($request->has('detail')) {
                $user->detail()->updateOrCreate([], $request->detail);
            }

            return $this->success('Usuario actualizado correctamente', $user->load('detail'), 200);
        } catch (\Exception $e) {

            Log::error("Error updating user: " . $e->getMessage());
            return $this->error('Error al actualizar el usuario', 500);
        }
    }

    public function createRelativeUser(Request $request, $id)
    {
        try {

            $principalUser = User::find($id);

            if (!$principalUser) {
                return $this->error('Usuario no encontrado', 404);
            }

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
                return $this->errorValidation('Errores de validacion', $validator->errors(), 422);
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
        } catch (\Exception $e) {

            Log::error("Error creating users: " . $e->getMessage());
            return $this->error('Error al crear el usuario', 500);
        }
    }


    public function getRelativeUsers($id)
    {
        try {

            // 1) Buscar al usuario principal
            $user = User::find($id);

            if (!$user) {
                return $this->error('Usuario no encontrado', 404);
            }

            // 2) Cargar a sus familiares (relatives) + detalles
            //    ->withPivot('relationship_type') se define en la relacion del modelo,
            //    pero al convertir a JSON, veras un nodo "pivot" con la informacion.
            $relatives = $user->relatives()->with('detail')->get();

            // 3) Responder en JSON
            return $this->success('Familiares obtenidos correctamente', $relatives, 200);
        } catch (\Exception $e) {

            Log::error("Error getting relatives: " . $e->getMessage());
            return $this->error('Error al obtener los familiares', 500);
        }
    }

    public function findByCode($code)
    {
        try {
            $detail = UserDetail::where('codigo', $code)->first();

            if (!$detail) {
                $this->error('Usuario no encontrado', 404);
            }
            // Obtener el usuario con sus detalles
            $user = User::with('detail')->find($detail->user_id);

            if (!$user) {
                $this->error('Usuario no encontrado', 404);
            }

            return $this->success('Usuario obtenido correctamente', $user, 200);
        } catch (\Exception $e) {
            Log::error("Error finding user by code: " . $e->getMessage());
            return $this->error('Error al buscar el usuario', 500);
        }
    }

    public function deleteUser($id)
    {
        try {
            $user = User::find($id);

            if (!$user) {
                return $this->error('Usuario no encontrado', 404);
            }

            $user->detail()->delete();
            $user->delete();

            return response()->json(null, 204);
        } catch (\Exception $e) {
            Log::error("Error deleting users: " . $e->getMessage());
            return $this->error('Error al eliminar los usuarios', 500);
        }
    }
}
