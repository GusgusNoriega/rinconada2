<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     title="Mi API nueva",
 *     version="1.0.0",
 *     description="DescripciÃ³n de mi API."
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="Bearer"
 * )
 */
class ApiController extends Controller
{
    
    public function hello()
    {
        return response()->json(['message' => 'Hola mundo']);
    }
}