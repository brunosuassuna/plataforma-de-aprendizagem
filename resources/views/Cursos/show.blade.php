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



            @foreach ($comentarios as $comentario)
            @if ($comentario->aula_id == $aula->id )
                <div class="comentarios-card">
                    <h4>{{ $autorComentario['name'] }}</h4>
                    <p>{{ $comentario->texto }}</p>
                </div>
            @endif
            @endforeach

            <form action="/cursos/{{ $aula->curso }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Comentário</label>
                    <textarea class="form-control" id="comentario" name="texto" rows="3" placeholder="Seu comentário..."></textarea>
                </div>
                <input type="number" value="{{ $aula->id }}" name="id" style="display: none;">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
@endsection
