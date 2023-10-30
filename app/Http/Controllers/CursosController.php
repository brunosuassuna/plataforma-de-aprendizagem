<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Aula;
use App\Models\Avaliacao;

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
        $aulas = Aula::all();
        return view('cursos.php', ['aulas' => $aulas]);
    }

    public function laravel()
    {
        $aulas = Aula::all();
        return view('cursos.laravel', ['aulas' => $aulas]);
    }
    public function mysql()
    {
        $aulas = Aula::all();
        return view('cursos.mysql', ['aulas' => $aulas]);
    }
    public function docker()
    {
        $aulas = Aula::all();
        return view('cursos.docker', ['aulas' => $aulas]);
    }

    public function areaprofessor()
    {
            // Somente professores podem acessar esta página
            if (auth()->user()->professor === 1) {
                return view('professor.areaprofessor');
            } else {
                return redirect('/')->with('msg', 'Somente professores podem acessar esta área!');
            }
    }
    public function avaliacao()
    {
        $avaliacaos = Avaliacao::all();
        return view('professor.avaliacao', ['avaliacaos' => $avaliacaos]);
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

        return redirect('/')->with('msg', 'Aula Criada!');
    }


    public function show($id) {

        $aula = Aula::findOrFail($id);

        return view('cursos.show', ['aula' => $aula]);

    }
}


