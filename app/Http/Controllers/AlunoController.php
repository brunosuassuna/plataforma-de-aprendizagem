<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // O conteúdo da página do aluno
    }

    public function exibirFormularioSenha()
    {
        return view('configurarSenha');
    }

    public function salvarSenha(Request $request)
    {
        // Processar a configuração da senha aqui
    }
}
