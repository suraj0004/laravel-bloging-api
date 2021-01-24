<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\CategoryController;
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

    Route::get('posts/all',[ PostController::class, 'all']);
    Route::get('posts/published',[ PostController::class, 'published']);
    Route::get('posts/unpublished',[ PostController::class, 'unpublished']);
    Route::get('posts/all/{id}',[ PostController::class, 'showFromAll']);
    Route::get('posts/published/{id}',[ PostController::class, 'showFromPublished']);
    Route::get('posts/unpublished/{id}',[ PostController::class, 'showFromUnpublished']);
    Route::post('posts',[ PostController::class, 'store']);
    Route::post('posts/{id}/update',[ PostController::class, 'update']);
    Route::post('posts/{id}/delete',[ PostController::class, 'destroy']);

    Route::apiResource('tag', TagController::class);
    Route::apiResource('category', CategoryController::class);

});

