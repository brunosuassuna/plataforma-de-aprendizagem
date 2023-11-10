@extends('layouts.main')

@section('title', 'Área do Professor')

@section('content')
    <div class="welcome-container">


        <h1> Bem-vindo, Professor!</h1>

        <div class="course-cards-container">
            <div class="course-card">
                <img src="/img/video-aula.png" alt="Cadastrar Aula" class="course-image">
                <a href="/cursos/create" class="course-link">
                    <span>Criar Aula</span>
                    <div class="overlay"></div>
                </a>
            </div>
            <div class="course-card">
                <img src="/img/prova.png" alt="Logotipo do Brothers Learning" class="course-image">
                <a href="/professor/avaliacao" class="course-link">
                    <span>Criar Avaliação</span>
                    <div class="overlay">
                        <p>Criar Avaliação</p>
                    </div>
                </a>
            </div>
            <div class="course-card">
                <img src="/img/professor.aulas2..png" alt="Logotipo do Brothers Learning" class="course-image">
                <a href="/professor/aulas" class="course-link">
                    <span>Minhas Aulas</span>
                    <div class="overlay">
                        <p>Minhas Aulas</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
