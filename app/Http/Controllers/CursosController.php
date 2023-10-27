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
        return view('cursos.nossoscursos');
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function php()
    {
        $aulas = Aula:: all();

        return view('cursos.php',['aulas'=>$aulas]);
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
    public function store(Request $request)
    {
        $aula = new Aula;

        $aula->nomeaula = $request->nomeaula;
        $aula->conteudo = $request->conteudo;
        $aula->curso = $request->curso;

        // Verifique se um arquivo de vídeo foi enviado
        if ($request->hasFile('videoaula')) {
            $file = $request->file('videoaula');

            // Determine um local para salvar o arquivo, por exemplo, na pasta de uploads
            $path = $file->store('uploads');

            $aula->videoaula = $path; // Salve o caminho do arquivo no banco de dados
        }

        $aula->save();


        return redirect('/')->with('msg','Aula Criada!');
    }






}
