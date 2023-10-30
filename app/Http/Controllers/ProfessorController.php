<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importe a classe Auth

use App\Models\Avaliacao;


class ProfessorController extends Controller
{
    public function avaliacao()
    {
        $avaliacaos = Avaliacao::all();
        return view('professor.avaliacao', ['avaliacaos' => $avaliacaos]);
    }
    public function store2(Request $request)
    {
        $avaliacao = new Avaliacao;

        $avaliacao->curso = $request->curso;
        $avaliacao->titulo = $request->titulo;
        $avaliacao->tipo = $request->tipo;
        $avaliacao->data = $request->data;
        $avaliacao->status = $request->status;
        $avaliacao->conteudo = $request->conteudo;


        $avaliacao->save();

        return redirect('/professor/avaliacao')->with('msg', 'Avaliacao Criada!');

    }
}

/*   public function index()
           {
               $professor = Auth::user();
               $courses = $professor->courses()->get();

               return view('professor.index', compact('courses'));
           }

           public function averages()
           {
               $professor = Auth::user();
               $courses = $professor->courses()->get();

               $averages = [];
               foreach ($courses as $course) {
                   $averages[] = [
                       'course' => $course->name,
                       'average' => $course->students()->avg('average'),
                   ];
               }

               return view('professor.averages', compact('averages'));
           }
           */
