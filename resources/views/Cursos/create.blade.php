@extends('layouts.main')

@section('title', 'Cadastrar Aula')

@section('content')

<body>
    <div class="container">
        <div id="event-create-container">
            <h1>Gestão de Aulas</h1>

            <form action="/cursos" method="POST" enctype="multipart/form-data" class="event-form">
                @csrf

                <div class="form-group">
                    <label for="nomeaula">Nome da Aula:</label>
                    <input type="text" class="form-control" id="nomeaula" name="nomeaula" placeholder="Insira o nome da aula">
                </div>

                <div class="form-group">
                    <label for="conteudo">Conteúdo da Aula:</label>
                    <textarea class="form-control" id="conteudo" name="conteudo" rows="5" placeholder="Descreva o conteúdo da aula"></textarea>
                </div>

                <div class="form-group">
                    <label for="curso">Escolha o Curso:</label>
                    <select name="curso" id="curso" required class="form-control">
                        <option value="" disabled selected>Selecione o curso</option>
                        <option value="php">PHP</option>
                        <option value="laravel">Laravel</option>
                        <option value="mysql">MySQL</option>
                        <option value="docker">Docker</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="videoaula">Vídeo Aula:</label>
                    <input type="file" class="form-control-file" id="videoaula" name="videoaula">
                </div>

                <button type="submit" class="btn btn-primary">Criar</button>
            </form>
        </div>

        <div class="delete-lesson">
            <h1>Apagar Aula</h1>

            <p>Para apagar uma aula, insira o ID da aula e clique em "Apagar".</p>


            <form id="form-apagar-aula" action="/apagar-aula" method="POST">
                <input type="text" name="id_aula" placeholder="Insira o ID da aula a ser apagada">
                <button type="button" onclick="confirmar()" style="background-color: red; color: white;">Confirmar</button>

            </form>

        </div>
    </div>
</body>

</html>




@endsection
