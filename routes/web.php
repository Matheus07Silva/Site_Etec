<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DepartamentosController;

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

Route::get('/', function () {
    return "isso é uma rota :) ";
});

Route::get('/', [PrincipalController::class, 'principal'])->name('index');

Route::get('/cursos', [CursosController::class, 'cursos'])->name('cursos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/departamentos', [DepartamentosController::class, 'departamentos'])->name('departamentos');