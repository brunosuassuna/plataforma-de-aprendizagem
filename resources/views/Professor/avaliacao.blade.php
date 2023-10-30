@extends('layouts.main')

@section('title', 'Área do Professor')

@section('content')


    <body>
        <header>
            <h1>Página de avaliação do professor</h1>
        </header>
        <main>
            <section class="avaliacoes">
                <h2>Avaliações criadas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Título</th>
                            <th>Tipo</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @foreach ($avaliacaos as $avaliacao)
                    <tbody>
                        <tr>
                            <td>{{ $avaliacao->curso }}</td>
                            <td>{{ $avaliacao->titulo }}</td>
                            <td>{{ $avaliacao->tipo }}</td>
                            <td>{{ $avaliacao->data }}</td>
                            <td>{{ $avaliacao->status }}</td>
                        </tr>
                        </tbody>
                        @endforeach
                </table>
            </section>
            <section class="nova-avaliacao">
                <h2>Criar nova avaliação</h2>
                <form action="/professor" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <select name="curso" id="curso" required>
                            <option value="" disabled selected>Selecione o curso</option>
                            <option value="php">Php</option>
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
                            <option value="prova">Prova</option>
                            <option value="trabalho-escrito">Trabalho escrito</option>
                            <option value="apresentacao">Apresentação</option>
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
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" id="conteudo" required></textarea>
                    </div>
                    <button type="submit">Criar avaliação</button>
                </form>
            </section>
        </main>




    @endsection
