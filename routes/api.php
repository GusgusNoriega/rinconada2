<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PagoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::get('/users/{id}/relatives', [UserController::class, 'listRelatives']);

Route::middleware('auth:sanctum')->group(function () {

    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index']); // Listar roles
        Route::post('/', [RoleController::class, 'store']); // Crear un rol
        Route::get('/{id}', [RoleController::class, 'show']); // Ver un rol
        Route::put('/{id}', [RoleController::class, 'update']); // Actualizar un rol
        Route::delete('/{id}', [RoleController::class, 'destroy']); // Eliminar un rol
    });

    Route::prefix('permissions')->group(function () {
        Route::get('/', [RoleController::class, 'indexPermissions']); // Listar permisos
        Route::post('/', [RoleController::class, 'storePermission']); // Crear un permiso
        Route::delete('/{id}', [RoleController::class, 'destroyPermission']); // Eliminar un permiso
    });

    // Rutas para la API de usuarios
    Route::prefix('users')->group(function () {
        // Listar todos los usuarios
        Route::get('/', [UserController::class, 'index']);
        // Crear un nuevo usuario
        Route::post('/', [UserController::class, 'store'])->middleware('permission:user_create');
        // Obtener un usuario especÃ­fico
        Route::get('/{id}', [UserController::class, 'show']);
        // Actualizar un usuario
        Route::put('/{id}/restricted', [UserController::class, 'update']);
        // Actualizar un usuario
        Route::put('/{id}', [UserController::class, 'update']);
        // Eliminar un usuario
        Route::delete('/{id}', [UserController::class, 'destroy']);

        Route::post('/{id}/relative', [UserController::class, 'storeRelative'])->middleware(['permission:user_create|user_family_create']);

        //Route::get('/users/{id}/relatives', [UserController::class, 'listRelatives']);

        Route::get('/codigo/{codigo}', [UserController::class, 'showByCodigo']);

        Route::put('/{id}/limited', [UserController::class, 'updateWithoutSensitive']);
    });

    Route::prefix('pagos')->group(function () {
        // Listar todos los usuarios
        Route::get('/', [PagoController::class, 'index']);
        Route::post('/', [PagoController::class, 'store']);
        Route::get('/{id}', [PagoController::class, 'show']);
        Route::put('/{id}', [PagoController::class, 'update']);
        Route::delete('/{id}', [PagoController::class, 'destroy']);
        Route::get('/user/{user_id}', [PagoController::class, 'getPagosByUser']);
    });

    Route::post('/change-password', [AuthController::class, 'changePassword']);
});