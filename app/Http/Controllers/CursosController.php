<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Aula;
use App\Models\Avaliacao;
use App\Models\Comentario;

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
        if ($request->hasFile('videoaula') && $request->file('videoaula')->isValid()) {

            $requestVideoaula = $request->videoaula;

            $extension = $requestVideoaula->extension();

            $nomevideoaula = md5($requestVideoaula->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestVideoaula->move(public_path('aulas'), $nomevideoaula);

            $aula->videoaula = $nomevideoaula;
        }
        $aula->save();

        return redirect('/')->with('msg', 'Aula Criada!');
    }

    public function store3(Request $request)
    {
        $comentario = new Comentario;

        $comentario->texto = $request->texto;
        $comentario->user_id = auth()->user()->id;
        $comentario->aula_id = $request->id;

        $comentario->save();


        return redirect('/cursos/php')->with('msg', 'Comentário enviado');

    }
    public function store4(Request $request)
    {
        $comentario = new Comentario;

        $comentario->texto = $request->texto;
        $comentario->user_id = auth()->user()->id;
        $comentario->aula_id = $request->id;

        $comentario->save();


        return redirect('/cursos/laravel')->with('msg', 'Comentário enviado');

    }
    public function store5(Request $request)
    {
        $comentario = new Comentario;

        $comentario->texto = $request->texto;
        $comentario->user_id = auth()->user()->id;
        $comentario->aula_id = $request->id;

        $comentario->save();


        return redirect('/cursos/mysql')->with('msg', 'Comentário enviado');

    }
    public function store6(Request $request)
    {
        $comentario = new Comentario;

        $comentario->texto = $request->texto;
        $comentario->user_id = auth()->user()->id;
        $comentario->aula_id = $request->id;

        $comentario->save();


        return redirect('/cursos/docker')->with('msg', 'Comentário enviado');

    }
    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        $c = Comentario::findOrFail($id);
        $comentarios = Comentario::all();
        $autorComentario = User::where('id', $c->user_id)->first()->toArray();
        return view('cursos.show', ['aula' => $aula],['comentarios' => $comentarios, 'autorComentario'=> $autorComentario]);

    }
}
