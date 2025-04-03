<?php

namespace App\Traits;


trait ResponseTrait
{
    public function success($message, $data = null, $code = 200)
    {
        return response()->json([
            'type'    => 'success',
            'message' => $message,
            'data'    => $data,
        ], $code);
    }

    public function error($message, $code = 400)
    {
        return response()->json([
            'type'    => 'error',
            'message' => $message,
        ], $code);
    }

    public function errorValidation($message, $errors, $code = 400)
    {
        return response()->json([
            'type'    => 'error',
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }
}
