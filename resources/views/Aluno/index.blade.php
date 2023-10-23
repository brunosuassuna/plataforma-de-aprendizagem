@extends('layout.main')

@section('title', 'Área do Aluno')

@section('content')
<div class="container">
    <h1 class="display-4">Bem-vindo à Área do Aluno</h1>
    <p>Aqui você encontrará informações sobre seus cursos e seu progresso.</p>

    <div class="section">
        <h2>Informações do Aluno</h2>
        <p>Nome: {{ Auth::user()->name }}</p>
        <p>E-mail: {{ Auth::user()->email }}</p>
        <p>Data de Nascimento: {{ Auth::user()->data_nascimento }}</p>
    </div>

    <div class="section">
        <h2>Cursos Inscritos</h2>
        <ul>
            <li>Curso 1</li>
            <li>Curso 2</li>
            <!-- Adicione aqui a lógica para exibir os cursos inscritos pelo aluno -->
        </ul>
    </div>

    <div class="section">
        <h2>Progresso nos Cursos</h2>
        <ul>
            <li>Curso 1 - 50% completo</li>
            <li>Curso 2 - 75% completo</li>
            <!-- Adicione aqui a lógica para exibir o progresso nos cursos -->
        </ul>
    </div>
</div>
@endsection
