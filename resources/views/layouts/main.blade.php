<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title> <!-- Define o título da página, que pode ser substituído em cada visualização específica -->

    <!-- Links para fontes e estilos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Scripts para funcionalidades JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtzJLQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/js/scripts.js"></script>

    <link rel="icon" href="/img/modelo5.jpeg" type="image/x-icon"> <!-- Ícone da página -->
</head>

<body>
    <header class="d-flex flex-row justify-content-between">
        <a href="/" class="navbar-brand">
            <img id="logo" src="/img/modelo5.jpeg" alt="Brothers Learning"> <!-- Logo do site -->
        </a>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <!-- Links de navegação no cabeçalho -->
                    <li class="nav-item">
                        <a href="/cursos/nossoscursos" class="nav-link">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/professor/areaprofessor" class="nav-link">Área do Professor</a>
                    </li>
                    <li class="nav-item">
                        <a href="/aluno/areaaluno" class="nav-link">Área do Aluno</a>
                    </li>
                    @auth <!-- Se o usuário estiver autenticado -->

                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf <!-- Token CSRF para segurança -->
                                <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault();  this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        </li>
                    @endauth
                    @guest <!-- Se o usuário não estiver autenticado -->

                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastre-se</a>
                        </li>

                    @endguest <!-- Fim das verificações de autenticação -->
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="contanier-fluid">
            <div class="row">
                @if (session('msg'))
                    <!-- Exibe uma mensagem se estiver presente na sessão -->
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content') <!-- Renderiza o conteúdo específico de cada visualização -->
            </div>
        </div>
    </main>

    <footer class="d-flex flex-row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/contato/areacontato">Contato</a> <!-- Link para a página de contato -->
                    </li>
                    <li>
                        Brothers Learning &copy; 2023 <!-- Informação de direitos autorais -->
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</body>

</html>
