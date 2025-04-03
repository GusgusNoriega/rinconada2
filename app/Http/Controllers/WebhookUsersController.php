<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Traits\ResponseTrait;
use App\Traits\WebHookTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookUsersController extends Controller
{
    use ResponseTrait, WebHookTrait;

    private $repository;

    /**
     * Constructor de la clase WebhookUsersController.
     *
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Maneja la solicitud del webhook.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request)
    {
        if (!$this->isAuthorized($request)) {
            return $this->unauthorizedResponse();
        }

        $event = $request->input('event');
        $data = $request->input('data');

        if (!$event || !$data) {
            return $this->errorResponse('Webhook con datos incompletos', 400);
        }

        return $this->processEvent($event, $data);
    }

    /**
     * Procesa el evento recibido desde el webhook.
     *
     * @param string $event
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */

    private function processEvent($event, $data)
    {
        switch ($event) {
            case 'user.created':
                return $this->createUser(request(), $data);
            case 'user.updated':
                return $this->updateUser(request(), $data);
            case 'user.deleted':
                return $this->deleteUser($data);
            case 'user.desactivate':
                return $this->desactivateUser($data);
            case 'user.activate':
                return $this->activateUser($data);
            case 'user.related.created':
                return $this->addRelatedUser(request(), $data);
            default:
                return $this->errorResponse('Evento no reconocido', 400);
        }
    }

    /**
     * Crea un nuevo usuario.
     *
     * @param Request $request
     * @param [type] $data
     * @return \Illuminate\Http\JsonResponse
     */
    private function createUser(Request $request, $data)
    {
        $request = $request->merge((array) $data);
        return $this->repository->createUser($request);
    }

    /**
     * Desactiva un usuario.
     *
     * @param [type] $data
     * @return \Illuminate\Http\JsonResponse
     */
    private function desactivateUser($data)
    {
        $user = User::where('nro_doc', $data['nro_doc'])->first();
        if (!$user) {
            return $this->error('Usuario no encontrado', 404);
        }
        $user->estado = 0;
        $user->save();

        return $this->success('Usuario desactivado correctamente', 200);
    }

    /**
     * Activa un usuario.
     *
     * @param [type] $data
     * @return \Illuminate\Http\JsonResponse
     */
    private function activateUser($data)
    {
        $user = User::where('nro_doc', $data['nro_doc'])->first();

        if (!$user) {
            return $this->error('Usuario no encontrado', 404);
        }
        $user->estado = 1;
        $user->save();

        return $this->success('Usuario activado correctamente', 200);
    }

    /**
     * Crear un usuario relaciona o familiar
     *
     * @param Request $request
     * @param [type] $data
     * @return \Illuminate\Http\JsonResponse
     */
    private function addRelatedUser(Request $request, $data)
    {
        $user = User::where('nro_doc', $data['num_doc_parent'])->first();
        if (!$user) {
            return $this->error('Usuario no encontrado', 404);
        }
        $request = $request->merge((array) $data);

        return $this->repository->createRelativeUser($request, $user->id);
    }
}
