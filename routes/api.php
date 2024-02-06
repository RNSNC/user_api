<?php

use App\Http\Controllers\Api\User\IndexController as UserIndexController;
use App\Http\Controllers\Api\User\StoreController as UserStoreController;
use App\Http\Controllers\Api\User\ShowController as UserShowController;
use App\Http\Controllers\Api\User\UpdateController as UserUpdateController;
use App\Http\Controllers\Api\User\DestroyController as UserDestroyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', UserIndexController::class)->name('api.user.index');
Route::post('/user', UserStoreController::class)->name('api.user.store');
Route::get('/user/{user}', UserShowController::class)->name('api.user.show');
Route::patch('/user/{user}', UserUpdateController::class)->name('api.user.update');
Route::delete('/user/{user}', UserDestroyController::class)->name('api.user.delete');
