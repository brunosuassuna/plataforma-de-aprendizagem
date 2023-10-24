<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtzJLQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
</head>

<body>
    <header class="d-flex flex-row justify-content-between">
        <a href="/" class="navbar-brand">
            <img id="logo" src="/img/modelo5.jpeg" alt="Brothers Learning">
        </a>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/cursos/nossoscursos" class="nav-link">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/professor/areaprofessor" class="nav-link">Área do Professor</a>
                    </li>
                    <li class="nav-item">
                        <a href="/aluno/areaaluno" class="nav-link">Área do Aluno</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contato/areacontato" class="nav-link">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="d-flex flex-row justify-content-center">
        Brothers Learning &copy; 2023
    </footer>
</body>

</html>
