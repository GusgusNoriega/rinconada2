<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait WebHookTrait
{

    /**
     * Verifica si el webhook es autorizado.
     *
     * @param Request $request
     * @return bool
     */

    private function isAuthorized(Request $request)
    {
        return $request->header('X-Webhook-Secret-Rinconada') === config('custom.webhook-secret');
    }

    /**
     * Devuelve una respuesta de no autorizado.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    private function unauthorizedResponse()
    {
        Log::warning('Intento de webhook no autorizado');
        return response()->json(['message' => 'No autorizado'], 403);
    }

    /**
     * Devuelve una respuesta de error con el mensaje y código proporcionados.
     *
     * @param string $message
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    private function errorResponse(string $message, int $status)
    {
        Log::warning($message);
        return $this->error($message, $status);
    }
}
