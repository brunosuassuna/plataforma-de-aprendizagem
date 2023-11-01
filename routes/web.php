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
use App\Http\Controllers\ProfessorController;

Route::get('/', [CursosController::class, 'index'] );
Route::get('/cursos/create', [CursosController::class, 'create'] )->middleware('auth');
Route::post('/cursos', [CursosController::class, 'store'] );

Route::get('/cursos/php', [CursosController::class, 'php'] );
Route::get('/cursos/laravel', [CursosController::class, 'laravel'] );
Route::get('/cursos/mysql', [CursosController::class, 'mysql'] );
Route::get('/cursos/docker', [CursosController::class, 'docker'] );

Route::get('/cursos/php/{id}', [CursosController::class, 'show'] );
Route::get('/cursos/laravel/{id}', [CursosController::class, 'show'] );
Route::get('/cursos/mysql/{id}', [CursosController::class, 'show'] );
Route::get('/cursos/docker/{id}', [CursosController::class, 'show'] );

Route::get('/professor/areaprofessor', [CursosController::class, 'areaprofessor'])->middleware('auth');

Route::post('/professor', [ProfessorController::class, 'store2'] );


Route::get('/professor/avaliacao', [CursosController::class, 'avaliacao'] )->middleware('auth');
Route::get('/aluno/areaaluno', [CursosController::class, 'areaaluno'] )->middleware('auth');
Route::get('/contato/areacontato', [CursosController::class, 'areacontato'] );







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    if (auth()->user()->professor == '0') {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
}else{
    Route::get('/professor/areaprofessor', function () {
        return view('professor.areaprofessor');
    })->name('areaprofessor');
}
});
*/
