@extends('layouts.main')

@section('title','docker')

@section('content')


<img id="logo" src="/img/doocker.png" alt="Brothers Learning">

<p>
    <div class="card">
        <a href="https://docs.docker.com/desktop/">Documentação Para Instalação</a>
    </div>
    </p>

<p>

    O Docker é uma plataforma open source que facilita a criação e administração de ambientes isolados. Ele possibilita o empacotamento de uma aplicação ou ambiente dentro de um container, se tornando portátil para qualquer outro host que contenha o Docker instalado.
</p>
<div>
    <h2>Aulas</h2>
    @foreach ($aulas as $aula)
    @if ($aula->curso == "docker")

            <div class="course-card">
                <a href="/cursos/docker/{{ $aula->id }}" class="course-link">
                <img src="/img/doocker.png" alt="Logotipo do Brothers Learning" class="course-image">
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
