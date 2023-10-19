<?php

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
use App\Http\Controllers\CursosController;

Route::get('/', [CursosController::class, 'index'] );
Route::get('/cursos/nossoscursos', [CursosController::class, 'nossoscursos'] );
Route::get('/professor/areaprofessor', [CursosController::class, 'areaprofessor'] );
Route::get('/aluno/areaaluno', [CursosController::class, 'areaaluno'] );
Route::get('/contato/areacontato', [CursosController::class, 'areacontato'] );
