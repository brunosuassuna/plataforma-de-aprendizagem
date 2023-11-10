<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Define o título da página, que pode ser substituído em cada visualização específica -->

    <!-- Links para fontes e estilos -->

    <link rel="stylesheet" href="/css/style.css">

    <!-- Scripts para funcionalidades JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtzJLQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>

    <link rel="icon" href="/img/bl-icon.png" type="image/x-icon "> <!-- Ícone da página -->
</head>

<body>

  <header class="container">
        <a href="/" class="logo-header">
            <img id="logo" src="/img/bl.png" alt="Brothers Learning"> <!-- Logo do site -->
        </a>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="/professor/areaprofessor" class="card">Área do Professor</a>
                    </li>

                    <li class="nav-item">
                        <a href="/dashboard" class="card">Dashboard</a>
                    </li>

                    @auth <!-- Se o usuário estiver autenticado -->
                        <li class="nav-item">
                            <form class="logout" action="/logout" method="POST">
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
                            <a href="/login" class="card">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="card">Cadastre-se</a>
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

    <footer class="d-flex flex-row justify-content-center" id="site-footer">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li>
                        Brothers Learning &copy; 2023 <!-- Informação de direitos autorais -->
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
</body>

</html>
