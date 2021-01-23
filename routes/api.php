<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\User\PostController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth'], function () {

    Route::post('user/registration',[AuthController::class, 'userRegistration']);
    Route::post('author/registration',[AuthController::class, 'authorRegistration']);
    Route::post('editor/registration',[AuthController::class, 'editorRegistration']);

    Route::post('login',[AuthController::class, 'login']);

});

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'user-module' ], function () {
    Route::apiResource('post', PostController::class);
});

