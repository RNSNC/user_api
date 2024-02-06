<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CreateController as UserCreateController;
use App\Http\Controllers\User\DestroyController as UserDestroyController;
use App\Http\Controllers\User\EditController as UserEditController;
use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\User\ShowController as UserShowController;
use App\Http\Controllers\User\StoreController as UserStoreController;
use App\Http\Controllers\User\UpdateController as UserUpdateController;
use App\Http\Controllers\User\ImportAndExportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('/user', UserIndexController::class)->name('user.index');
Route::get('/user/create', UserCreateController::class)->name('user.create');
Route::post('/user', UserStoreController::class)->name('user.store');
Route::get('/user/{user}', UserShowController::class)->name('user.show');
Route::get('/user/{user}/edit', UserEditController::class)->name('user.edit');
Route::patch('/user/{user}', UserUpdateController::class)->name('user.update');
Route::delete('/user/{user}', UserDestroyController::class)->name('user.destroy');

Route::get('import_export', [ImportAndExportController::class, 'fileImportExport'])->name('user.import_export');
Route::post('file_import', [ImportAndExportController::class, 'fileImport'])->name('file_import');
Route::get('file_export', [ImportAndExportController::class, 'fileExport'])->name('file_export');
