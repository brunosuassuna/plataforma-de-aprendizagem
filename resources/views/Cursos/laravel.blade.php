@extends('layouts.main')

@section('title', 'laravel')

@section('content')



    <img id="logo" src="/img/laravell.png" alt="Brothers Learning">

    <p>
    <div class="card">
        <a href="https://laravel.com/docs">Documentação Para Instalação</a>
    </div>
    </p>

    <p>

        Laravel é um framework PHP gratuito e de código aberto, utilizado no desenvolvimento de sistemas para web. Algumas
        de suas principais características são permitir a escrita de um código mais simples e legível, e suporte a recursos
        avançados que agilizam o processo de desenvolvimento.
    </p>

    <div>
        <h2>Aulas</h2>
        @foreach ($aulas as $aula)
            @if ($aula->curso == 'laravel')
                <div class="course-card">
                    <a href="/cursos/laravel/{{ $aula->id }}" class="course-link">
                        <img src="/img/laravell.png" alt="Logotipo do Brothers Learning" class="course-image">
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
