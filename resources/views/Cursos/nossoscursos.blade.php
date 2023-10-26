@extends('layouts.main')

@section('title', 'Brothers Learning')

@section('content')


    <body>
        
            <h1>Nossos Cursos</h1>


            <div class="buttons">
                <a href="/cursos/php" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Curso de PHP">
                    PHP
                </a>
                <a href="/cursos/laravel" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
                    title="Curso de Laravel">
                    Laravel
                </a>
                <a href="/cursos/mysql" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    title="Curso de MySQL">
                    MySQL
                </a>
                <a href="/cursos/docker" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Curso de Docker">
                    Docker
                </a>
            </div>

    </body>

    </html>
@endsection
