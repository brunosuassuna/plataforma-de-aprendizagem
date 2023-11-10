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
Route::post('/cursos/php', [CursosController::class, 'store3'] );
Route::post('/cursos/laravel', [CursosController::class, 'store4'] );
Route::post('/cursos/mysql', [CursosController::class, 'store5'] );
Route::post('/cursos/docker', [CursosController::class, 'store6'] );

Route::get('/cursos/php', [CursosController::class, 'php'] );
Route::get('/cursos/laravel', [CursosController::class, 'laravel'] );
Route::get('/cursos/mysql', [CursosController::class, 'mysql'] );
Route::get('/cursos/docker', [CursosController::class, 'docker'] );

Route::get('/cursos/php/{id}', [CursosController::class, 'show'] )->middleware('auth');
Route::get('/cursos/laravel/{id}', [CursosController::class, 'show'] )->middleware('auth');
Route::get('/cursos/mysql/{id}', [CursosController::class, 'show'] )->middleware('auth');
Route::get('/cursos/docker/{id}', [CursosController::class, 'show'] )->middleware('auth');
Route::delete('/cursos/mysql/{id}', [CursosController::class, 'destroy'] )->middleware('auth');
Route::delete('/cursos/laravel/{id}', [CursosController::class, 'destroy'] )->middleware('auth');
Route::delete('/cursos/docker/{id}', [CursosController::class, 'destroy'] )->middleware('auth');
Route::delete('/cursos/php/{id}', [CursosController::class, 'destroy'] )->middleware('auth');

Route::get('/professor/areaprofessor', [CursosController::class, 'areaprofessor'])->middleware('auth');
Route::get('/professor/aulas', [CursosController::class, 'aulas'])->middleware('auth');

Route::post('/professor', [ProfessorController::class, 'store2'] );


Route::get('/professor/avaliacao', [CursosController::class, 'avaliacao'] )->middleware('auth');
Route::get('/aluno/areaaluno', [CursosController::class, 'areaaluno'] )->middleware('auth');

Route::get('/dashboard', [CursosController::class, 'dashboard'] )->middleware('auth');


Route::post('/apagar-aula', function (Request $request) {
    $id_aula = $request->input('id_aula');

    // Excluir a aula
    DB::table('aulas')->where('id', $id_aula)->delete();

    // Redirecionar o usuário para a página de aulas
    return redirect('/aulas');
});









