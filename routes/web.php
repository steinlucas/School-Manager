<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProfessoresController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuario.index');
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuario.create');
Route::post('/usuarios/store', [UsuariosController::class, 'store'])->name('usuario.store');;
Route::get('/usuarios/edit/{id}', [UsuariosController::class, 'edit'])->name('usuario.edit');
Route::post('/usuarios/update/{id}', [UsuariosController::class, 'update'])->name('usuario.update');
Route::get('/usuarios/destroy/{id}', [UsuariosController::class, 'destroy'])->name('usuario.destroy');;

Route::get('/professores', [ProfessoresController::class, 'index'])->name('professor.index');
Route::get('/professores/create', [ProfessoresController::class, 'create'])->name('professor.create');
Route::post('/professores/store', [ProfessoresController::class, 'store'])->name('professor.store');;
Route::get('/professores/edit/{id}', [ProfessoresController::class, 'edit'])->name('professor.edit');
Route::post('/professores/update/{id}', [ProfessoresController::class, 'update'])->name('professor.update');
Route::get('/professores/destroy/{id}', [ProfessoresController::class, 'destroy'])->name('professor.destroy');;