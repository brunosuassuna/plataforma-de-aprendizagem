<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Aula;
use App\Models\Avaliacao;
use App\Models\Comentario;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CursosController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function dashboard()
    {
        $avaliacaos = Avaliacao::all();
        return view('dashboard', ['avaliacaos' => $avaliacaos]);
    }

    public function nossoscursos()
    {
        return view('cursos.nossoscursos');
    }
    public function create()
    {
        $user = Auth::id();
        return view('cursos.create', ['user' => $user]);
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
        $aula->user_id = $request->id;
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


        return back()->with('msg', 'Comentário enviado');
    }
    public function store4(Request $request)
    {
        $comentario = new Comentario;

        $comentario->texto = $request->texto;
        $comentario->user_id = auth()->user()->id;
        $comentario->aula_id = $request->id;

        $comentario->save();


        return back()->with('msg', 'Comentário enviado');
    }
    public function store5(Request $request)
    {
        $comentario = new Comentario;

        $comentario->texto = $request->texto;
        $comentario->user_id = auth()->user()->id;
        $comentario->aula_id = $request->id;

        $comentario->save();


        return back()->with('msg', 'Comentário enviado');
    }
    public function store6(Request $request)
    {
        $comentario = new Comentario;

        $comentario->texto = $request->texto;
        $comentario->user_id = auth()->user()->id;
        $comentario->aula_id = $request->id;

        $comentario->save();


        return back()->with('msg', 'Comentário enviado');
    }
    public function show($id)
    {
        $aula = Aula::findOrFail($id);
        $c = Comentario::find($id);
        if ($c === null) {
            $c = new Comentario(); // Se não encontrou, cria um novo Comentario vazio
        }
        $comentarios = Comentario::all();
        $users = User::all();
        $autorComentario = ($c->user_id) ? User::where('id', $c->user_id)->first()->toArray() : null;
        $semComentario = Comentario::where('aula_id', $aula->id)->doesntExist();

        return view('cursos.show', [
            'aula' => $aula,
            'comentarios' => $comentarios,
            'autorComentario' => $autorComentario,
            'users' => $users,
            'semComentario' => $semComentario
        ]);
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function aulas()
    {

        $user = auth()->user();
        $aulas = $user->aulas;
        return view('professor.aulas', ['aulas' => $aulas]);
    }

    public function destroy($id)
    {

        Aula::findOrFail($id)->delete();

        return redirect('/professor/aulas')->with('msg', 'Aula Excluída com Sucesso!');
    }
}
