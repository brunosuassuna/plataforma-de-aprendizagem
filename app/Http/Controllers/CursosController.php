<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aula;

class CursosController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function nossoscursos()
    {
        $aulas = Aula::all();
        return view('cursos.nossoscursos',['aula' => $aulas]);
    }

    public function php()
    {
        return view('cursos.php');
    }
    public function laravel()
    {
        return view('cursos.laravel');
    }
    public function mysql()
    {
        return view('cursos.mysql');
    }
    public function docker()
    {
        return view('cursos.docker');
    }

    public function areaprofessor()
    {
        return view('professor.areaprofessor');
    }

    public function areaaluno()
    {
        return view('aluno.areaaluno');
    }

    public function areacontato()
    {
        return view('contato.areacontato');
    }
}
