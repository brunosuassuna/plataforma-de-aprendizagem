@extends('layouts.main')

@section('title', $aula->nomeaula)

@section('content')
    <div class="aula-div">
        <h2>{{ $aula->nomeaula }}</h2>
        <div class="video-card">
            <video controls>
                <source src="/aulas/{{ $aula->videoaula }}" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        <div class="conteudo-card">
            <h3><strong>Conteúdo da Aula:</strong></h3>
            <p>{{  $aula->conteudo }} </p>
        </div>
        <div class="comentarios-card">

            <h3><strong>Comentários</strong></h3>

            @if ($semComentario == true)
                <h4>Está aula ainda não possui comentários</h4>
            @endif


            @foreach ($comentarios as $comentario)

                @if ($comentario->aula_id == $aula->id)

                    <div class="comentarios-card">

                        @foreach ($users as $user)
                            @if ($user->id == $comentario->user_id)
                                @if ($user->professor == '1')
                                <div class="comentario-prof">
                                    <img class="prof-icon" src="/img/professor.png" alt="Icone do Professor">
                                    <h4>{{ $user->name }}</h4>
                                    <h5>Professor</h5>
                                        <p>{{ $comentario->texto }}</p>

                                    </div>
                                @else
                                <div class="comentario-aluno">
                                    <img class="aluno-icon" src="/img/aluna.png" alt="Icone do Aluno">
                                    <h4>{{ $user->name }}</h4>
                                    <h5>Aluno</h5>
                                        <p>{{ $comentario->texto }}</p>

                                    </div>
                                @endif
                            @endif
                        @endforeach

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
