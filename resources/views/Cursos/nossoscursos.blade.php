@extends('layout.main')

@section('title', 'Brothers Learning')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Nossos Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .btn {
            margin: 10px;
        }

        .tooltip {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <main>
        <h1>Nossos Cursos</h1>

        <div class="buttons">
            <a href="/curso/php" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Curso de PHP">
                PHP
            </a>
            <a href="/curso/laravel" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Curso de Laravel">
                Laravel
            </a>
            <a href="/curso/mysql" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Curso de MySQL">
                MySQL
            </a>
            <a href="/curso/docker" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Curso de Docker">
                Docker
            </a>
        </div>
    </main>
</body>
</html>
@endsection
