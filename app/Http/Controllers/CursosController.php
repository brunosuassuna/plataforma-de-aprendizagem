<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function nossoscursos()
    {
        return view('cursos.nossoscursos');
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
