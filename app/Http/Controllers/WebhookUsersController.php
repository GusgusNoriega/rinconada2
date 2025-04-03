<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookUsersController extends Controller
{
    use ResponseTrait;

    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function handle(Request $request)
    {
        if ($request->header('X-Webhook-Secret-Rinconada') !== config('custom.webhook-secret')) {
            Log::warning('Intento de webhook no autorizado', ['ip' => $request->ip()]);
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $event = $request->input('event');
        $data = $request->input('data');

        if (!$event || !$data) {
            Log::warning('Webhook con datos incompletos', ['event' => $event, 'data' => $data]);
            return $this->error('Webhook con datos incompletos', 400);
        }

        switch ($event) {
            case 'user.created':
                return $this->createUser($request, $data);
                break;
            case 'user.updated':
                // Lógica para manejar la actualización de un usuario
                break;
            case 'user.desactivated':
                // Lógica para manejar la eliminación de un usuario
                break;
            case 'user.activated':
                // Lógica para manejar la eliminación de un usuario
                break;
            case 'user.add.related':
                // Lógica para manejar la eliminación de un usuario
                break;
            default:
                Log::warning('Evento no reconocido', ['event' => $event]);
                return $this->error('Evento no reconocido', 400);
        }
    }


    private function createUser(Request $request, $data)
    {
        $request = $request->merge((array) $data);
        return $this->repository->createUser($request);
    }


    private function updatedUser(Request $request, $data)
    {
        $user = User::find($data['id']);
        $request = $request->merge((array) $data);
        return $this->repository->createUser($request);
    }
}
