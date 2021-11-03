<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function(){
    Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

route::get('/usuarios',[App\Http\Controllers\UsuariosController::class, 'index']);
route::get('/usuarios/new',[App\Http\Controllers\UsuariosController::class, 'new']);
route::post('/usuarios/add',[App\Http\Controllers\UsuariosController::class, 'add']);
route::get('/usuarios/{id}/edit',[App\Http\Controllers\UsuariosController::class, 'edit']);
route::post('/usuarios/update/{id}',[App\Http\Controllers\UsuariosController::class, 'update']);
route::delete('/usuarios/delete/{id}',[App\Http\Controllers\UsuariosController::class, 'delete']);







