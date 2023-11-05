@extends('layouts.main')

@section('title', 'PHP')

@section('content')



    <img id="logo" src="/img/php.png" alt="Brothers Learning">

    <p>
    <div class="container">
        <a href="https://www.php.net/manual/pt_BR/faq.installation.php">Documentação Para Instalação</a>
    </div>
    </p>

    <p>
        O PHP é uma linguagem de programação amplamente utilizada para o desenvolvimento web, reconhecida por sua
        flexibilidade e poder. Seja você um novato ou um desenvolvedor experiente, compreender o PHP é fundamental
        para construir aplicativos web dinâmicos e escaláveis.
    </p>

    <div>
        <h2>Aulas</h2>
        @foreach ($aulas as $aula)
            @if ($aula->curso == 'php')
                <div class="course-card">
                    <a href="/cursos/php/{{ $aula->id }}" class="course-link">
                        <img src="#" alt="Logotipo do Brothers Learning" class="course-image">
                        <h5>{{ $aula->nomeaula }}</h5>
                        <div class="overlay">
                            <h5>{{ $aula->conteudo }}</h5>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

@endsection
