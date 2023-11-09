@extends('layouts.main')

@section('title', 'Cadastrar Aula')

@section('content')

<div id="event-create-container" class="col-md-8 offset-md-2">
    <h1 style="text-align: center; margin-bottom: 20px;">Cronograma de Aulas</h1>

    <form action="/cursos" method="POST" enctype="multipart/form-data" style="background-color: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        @csrf

        <div class="form-group">
            <label for="nomeaula" style="font-weight: bold;">Nome da Aula:</label>
            <input type="text" class="form-control" id="nomeaula" name="nomeaula" placeholder="Insira o nome da aula" style="border: 1px solid #ccc; border-radius: 5px; padding: 8px; width: 100%;">
        </div>

        <div class="form-group">
            <label for="conteudo" style="font-weight: bold;">Conteúdo da Aula:</label>
            <textarea class="form-control" id="conteudo" name="conteudo" rows="5" placeholder="Descreva o conteúdo da aula" style="border: 1px solid #ccc; border-radius: 5px; padding: 8px; width: 100%; resize: vertical;"></textarea>
        </div>

        <div class="form-group">
            <label for="curso" style="font-weight: bold;">Escolha o Curso:</label>
            <select name="curso" id="curso" required class="form-control" style="border: 1px solid #ccc; border-radius: 5px; padding: 8px; width: 100%;">
                <option value="" disabled selected>Selecione o curso</option>
                <option value="php">PHP</option>
                <option value="laravel">Laravel</option>
                <option value="mysql">MySQL</option>
                <option value="docker">Docker</option>
            </select>
        </div>

        <div class="form-group">
            <label for="videoaula" style="font-weight: bold;">Vídeo Aula:</label>
            <input type="file" class="form-control-file" id="videoaula" name="videoaula" style="padding: 8px; width: 100%;">
        </div>

        <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border: none; border-radius: 5px; background-color: #4a90e2; color: #fff; cursor: pointer;">Criar</button>
    </form>
</div>




@endsection
