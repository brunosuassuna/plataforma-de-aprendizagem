<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Exibir uma lista de itens
    public function index()
    {
        // Lógica para exibir uma lista de itens
    }

    // Exibir o formulário para criar um novo item
    public function create()
    {
        // Lógica para exibir o formulário de criação
    }

    // Armazenar um novo item no banco de dados
    public function store(Request $request)
    {
        // Lógica para criar e armazenar um novo item
    }

    // Exibir um item específico
    public function show($id)
    {
        // Lógica para exibir um item específico
    }

    // Exibir o formulário para editar um item
    public function edit($id)
    {
        // Lógica para exibir o formulário de edição
    }

    // Atualizar um item no banco de dados
    public function update(Request $request, $id)
    {
        // Lógica para atualizar um item
    }

    // Excluir um item do banco de dados
    public function destroy($id)
    {
        // Lógica para excluir um item
    }
}
