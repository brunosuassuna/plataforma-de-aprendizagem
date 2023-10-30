@extends('layouts.main')

@section('title','PHP')

@section('content')



<img id="logo" src="/img/php-logo.svg" alt="Brothers Learning">

<p>
O PHP é uma linguagem de programação multiplataforma, open source, gratuita e bastante completa. É uma das linguagens de programação mais utilizadas no desenvolvimento web, tendo uma comunidade vibrante e uma evolução rápida nos últimos anos.
</p>

<div>
    <h2>Aulas</h2>
    @foreach ($aulas as $aula)
    @if ($aula->curso == "php")
            <div class="course-card">
                <a href="/cursos/php/{{ $aula->id }}" class="course-link"></a>
                <img src="#" alt="Logotipo do Brothers Learning" class="course-image">
                <h5>{{ $aula->nomeaula }}</h5>
                <div class="overlay">
                    <h5>{{ $aula->conteudo }}</h5>
                </div>
            </div>
            @endif
        @endforeach
</div>

@endsection
