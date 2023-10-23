<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área do Aluno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <h1>Área do Aluno</h1>
        </header>

        <main>
            <div class="row">
                <div class="col-md-6">
                    <h2>Login</h2>

                    <form action="/login" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2>Cursos</h2>

                    <ul>
                        <li>
                            <a href="#">Curso de PHP</a>
                        </li>
                        <li>
                            <a href="#">Curso de Laravel</a>
                        </li>
                        <li>
                            <a href="#">Curso de Docker</a>
                        </li>
                        <li>
                            <a href="#">Curso Mysql</a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; 2023 Brothers Learning</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
