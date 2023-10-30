@extends('layouts.main')

@section('title', 'Área do Professor')

@section('content')
    <h1> Bem Vindo, Professor! </h1>

    <div>

        <div class="course-card" id="prof-card">
            <img src="/img/video-aula.png" alt="Cadastrar Aula" class="course-image" id="prof-img">
            <a href="/cursos/create" class="course-link">Criar Aula
                <div class="overlay">
                </div>
            </a>
        </div>
        <div class="course-card" id="prof-card">
            <img src="/img/prova.png" alt="Logotipo do Brothers Learning" class="course-image" id="prof-img">
            <a href="/professor/avaliacao" class="course-link">Criar Avaliação
                <div class="overlay">
                    <p>Criar Avaliação</p>
                </div>
            </a>
        </div>

    </div>

@endsection
