@extends('layouts.main')

@section('title', 'Cadastrar Aula')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cronograma de Aulas</h1>

    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
            <label for="title">Nome:</label>
            <input type="type" class="form-control-file" id="nomeaula" name="nomeaula" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="title">Conteudo:</label>
            <textarea class="form-control" id="conteudo" name="conteudo" rows="3" placeholder="Descreva o conteúdo da aula"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Curso:</label>
            <input type="type" class="form-control-file" id="curso" name="curso">
        </div>


        <div class="form-group">
            <label for="title">Video Aula</label>
            <input type="file" class="form-control-file" id="videoaula" name="videoaula">
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
</div>

@endsection
