<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Aplica o middleware 'auth' a todos os métodos do controlador
    }

    public function index()
    {
        // Método para exibir o conteúdo da página do aluno
    }

    public function exibirFormularioSenha()
    {
        return view('configurarSenha'); // Retorna a view para configurar a senha
    }

    public function salvarSenha(Request $request)
    {
        // Método para processar a configuração da senha
        // O código para processar e salvar a senha fornecida pelo formulário estaria aqui
    }
}
