<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'auth'], function () {

    Route::post('user/registration',[AuthController::class, 'userRegistration']);
    Route::post('author/registration',[AuthController::class, 'authorRegistration']);
    Route::post('editor/registration',[AuthController::class, 'editorRegistration']);

    Route::post('login',[AuthController::class, 'login']);
    Route::post('logout',[AuthController::class, 'logout']);

});

Route::group(['middleware' => ['auth:sanctum'] ], function () {
    // Route::apiResource('post', PostController::class);
});

