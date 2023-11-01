@extends('layouts.main')

@section('title', $aula->nomeaula)

@section('content')
    <div>
        <h2>{{ $aula->nomeaula }}</h2>
        <div class="video-card">
            <video controls>
                <source src="/aulas/{{ $aula->videoaula }}" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        <div class="conteudo-card">
            <h3><strong>Conteúdo da Aula:</strong></h3>
        <p>{{ $aula->conteudo }}</p>
        </div>
        <div class="comentarios-card">
            <h3><strong>Comentários</strong></h3>
            <textarea name="comentario" id="comentario" cols="70" rows="3"></textarea><br>
            <button type="submit">Enviar</button>
        </div>
    </div>
@endsection
