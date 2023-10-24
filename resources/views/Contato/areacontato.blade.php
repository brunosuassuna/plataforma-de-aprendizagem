@extends('layouts.main')

@section('title', 'Brothers Learning')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área de Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            max-width: 960px;
            margin: 0 auto;
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

        .form-control {
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="display-4">Área de Contato</h1>
    </header>
    <main class="container">
        <section class="section">
            <h2 class="mb-4">Informações da empresa</h2>

            <ul class="list-group">
                <li class="list-group-item">Nome: <span id="nome"></span>Brothers Learning</li>
                <li class="list-group-item">Endereço: <span id="endereco"></span>Rua da Areia, nº666</li>
                <li class="list-group-item">Telefone: <span id="telefone"></span>(83)3222-2222</li>
                <li class="list-group-item">E-mail: <span id="email"></span>brotherslearning@gmail.com</li>
            </ul>
        </section>
        <section class="section">
            <h2 class="mb-4">Formulário de contato</h2>

            <form action="/contato/enviar" method="post" class="row g-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" placeholder="Nome" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea name="mensagem" placeholder="Mensagem" class="form-control"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p class="text-muted">Brothers Learning &copy; 2023</p>
    </footer>
</body>
</html>
@endsection
