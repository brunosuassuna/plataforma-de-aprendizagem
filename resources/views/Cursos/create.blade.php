@extends('layouts.main')

@section('title', 'Cadastrar Aula')

@section('content')

<div class="container">
    <div id="event-create-container" class="mt-5">
        <h1 class="mb-4">Gestão de Aulas</h1>

        <form action="/cursos" method="POST" enctype="multipart/form-data" class="event-form">
            @csrf

            <div class="form-group">
                <label for="nomeaula">Nome da Aula:</label>
                <input type="text" class="form-control" id="nomeaula" name="nomeaula" placeholder="Insira o nome da aula" required>
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo da Aula:</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="5" placeholder="Descreva o conteúdo da aula" required></textarea>
            </div>

            <div class="form-group">
                <label for="curso">Escolha o Curso:</label>
                <select name="curso" id="curso" class="form-control" required>
                    <option value="" disabled selected>Selecione o curso</option>
                    <option value="php">PHP</option>
                    <option value="laravel">Laravel</option>
                    <option value="mysql">MySQL</option>
                    <option value="docker">Docker</option>
                </select>
            </div>

            <div class="form-group">
                <label for="videoaula">Vídeo Aula:</label>
                <input type="file" class="form-control-file" id="videoaula" name="videoaula">
            </div>
            <input type="number" value="{{ $user }}" name="id" style="display: none;">

            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
</div>

@endsection
