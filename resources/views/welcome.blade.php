@extends('layouts.main')

@section('title', 'Brothers Learning')

@section('content')
    <div class="course-grid">
        <div class="course-card">
            <a href="/cursos/php" class="course-link" title="PHP: Módulo 01 [20 HORAS]">
                <img src="img/php-logo.svg" alt="Logotipo do Brothers Learning" class="course-image">
                <div class="overlay">
                    <h2 class="course-title">PHP</h2>
                    <p class="course-description">Mais Informações</p>
                </div>
            </a>
        </div>

        <div class="course-card">
            <a href="/cursos/laravel" class="course-link" title="LARAVEL: Módulo 01 [20 HORAS]">
                <img src="img/laravell.png" alt="Logotipo do Brothers Learning" class="course-image">
                <div class="overlay">
                    <h2 class="course-title">Laravel</h2>
                    <p class="course-description">Mais Informações</p>
                </div>
            </a>
        </div>

        <div class="course-card">
            <a href="/cursos/mysql" class="course-link" title="MYSQL: Módulo 01 [20 HORAS]">
                <img src="img/mysql-logo.png" alt="Logotipo do Brothers Learning" class="course-image">
                <div class="overlay">
                    <h2 class="course-title">MySQL</h2>
                    <p class="course-description">Mais Informações</p>
                </div>
            </a>
        </div>

        <div class="course-card">
            <a href="/cursos/docker" class="course-link" title="DOCKER: Módulo 01 [20 HORAS]">
                <img src="img/doocker.png" alt="Logotipo do Brothers Learning" class="course-image">
                <div class="overlay">
                    <h2 class="course-title">Docker</h2>
                    <p class="course-description">Mais Informações</p>
                </div>
            </a>
        </div>
    </div>
@endsection
