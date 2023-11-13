@extends('layouts.main')

@section('title', 'Área do Professor')

@section('content')


    <title>Área Do Professor</title>
    </head>

    <body>
            <h1>Página de Avaliação do Professor</h1>
            <div class="avaliacoes-container">
            <section class="avaliacoes">
                <h2>Avaliações Criadas</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Título</th>
                            <th>Tipo</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($avaliacaos as $avaliacao)
                            <tr>
                                <td>{{ $avaliacao->curso }}</td>
                                <td>{{ $avaliacao->titulo }}</td>
                                <td>{{ $avaliacao->tipo }}</td>
                                <td>{{ $avaliacao->data }}</td>
                                <td>{{ $avaliacao->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
            <section class="nova-avaliacao">
                <h2>Criar Nova Avaliação</h2>
                <form action="/professor" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <select name="curso" id="curso" required>
                            <option value="" disabled selected>Selecione o curso</option>
                            <option value="php">PHP</option>
                            <option value="laravel">Laravel</option>
                            <option value="mysql">Mysql</option>
                            <option value="docker">Docker</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" required />
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo de avaliação</label>
                        <select name="tipo" id="tipo" required>
                            <option value="" disabled selected>Selecione o tipo</option>
                            <option value="Prova">Prova</option>
                            <option value="Trabalho-Escrito">Trabalho escrito</option>
                            <option value="Apresentacao">Apresentação</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="date" name="data" id="data" required />
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" required>
                            <option value="" disabled selected>Selecione</option>
                            <option value="aberto">Aberto</option>
                            <option value="em-andamento">Em andamento</option>
                            <option value="concluido">Concluído</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="conteudo" class="form-label">Conteúdo</label>
                        <div class="custom-textarea">
                            <textarea name="conteudo" id="conteudo" required minlength="10" maxlength="2000" class="form-control"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="padding: 10px 20px; border: none; border-radius: 5px; background-color: #4a90e2; color: #fff; cursor: pointer;">Criar</button>
                </form>
            </section>
        </div>
    </body>
@endsection
