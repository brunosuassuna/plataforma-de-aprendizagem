@extends('layouts.main')

@section('title', 'Brothers Learning')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Brothers Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .header {
            text-align: center;
            margin-top: 20px;
        }

        .section {
            padding: 20px;
        }

        .h2 {
            font-size: 20px;
        }

        .p {
            font-size: 16px;
        }

        .list-group {
            margin-bottom: 20px;
        }

        .btn {
            margin-top: 10px;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .call-to-action {
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="header">

        <h1 class="display-4">Brothers Learning</h1>
    </header>
    <main>
        <div class="container">
            <p>
                A Brothers Learning é uma plataforma de aprendizagem online que oferece cursos de qualidade nas áreas de programação e tecnologia.
            </p>
            <p>
                Nosso objetivo é ajudar você a alcançar seus objetivos de aprendizagem, seja para se qualificar para uma nova carreira, melhorar suas habilidades profissionais ou simplesmente aprender algo novo.
            </p>
            <p>
                Temos uma equipe de professores experientes e qualificados que estão comprometidos em fornecer um ensino de alta qualidade. Nossos cursos são desenvolvidos de forma a serem envolventes e instrutivos, e nossos professores estão sempre disponíveis para ajudá-lo a aprender.
            </p>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Acesso a cursos de qualidade:</strong> Nossos cursos são desenvolvidos por professores experientes e qualificados.
                </li>
                <li class="list-group-item">
                    <strong>Flexibilidade:</strong> Você pode estudar no seu próprio ritmo e tempo.
                </li>
                <li class="list-group-item">
                    <strong>Suporte ao aluno:</strong> Nossos professores estão sempre disponíveis para ajudá-lo a aprender.
                </li>
                <li class="list-group-item">
                    <strong>Preço acessível:</strong> Nossos cursos são acessíveis para todos.
                </li>
            </ul>
            <p>
                Se você está procurando uma plataforma de aprendizagem online que oferece cursos de qualidade e um suporte ao aluno excelente, a Brothers Learning é a escolha certa para você.
            </p>
            <div class="call-to-action">
                <a href="/inscricao" class="btn btn-primary">Inicie sua jornada de aprendizagem hoje mesmo!</a>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Copyright &copy; 2023</p>


        </div>
    </footer>
</body>
</html>
@endsection
