@extends('layouts.main')

@section('title', 'mysql')

@section('content')


    <img id="logo" src="/img/mysql-logo.png" alt="Brothers Learning">

    <p>
    <div class="container">
        <a href="https://dev.mysql.com/doc/">Documentação Para Instalação</a>
    </div>
    </p>

    <p>

        SQL é a linguagem padrão para a manipulação e extração de dados dos Bancos de Dados relacionais. Esses bancos de
        dados são estruturados em tabelas, com colunas e linhas, lembrando um pouco as planilhas.
    </p>
    <div>
        <h2>Aulas</h2>
        @foreach ($aulas as $aula)
            @if ($aula->curso == 'mysql')
                <div class="course-card">
                    <a href="/cursos/mysql/{{ $aula->id }}" class="course-link">
                        <img src="/img/mysql-logo.png" alt="Logotipo do Brothers Learning" class="course-image">
                        <h5>{{ $aula->nomeaula }}</h5>
                        <div class="overlay">
                            <h5>{{ $aula->conteudo }}</h5>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

@endsection
