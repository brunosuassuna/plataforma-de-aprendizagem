@extends('layouts.main')

@section('title', 'Área do Professor')

@section('content')


    <div class="container">
        <h1>Minhas Aulas Cadastradas</h1>

        @foreach(['php', 'laravel', 'mysql', 'docker'] as $curso)
            @if ($aulas->where('curso', $curso)->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Curso</th>
                            <th>Conteúdo</th>
                            <th>Aula</th>
                            <th class="caixa">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aulas->where('curso', $curso) as $aula)
                            <tr>
                                <td>{{ $aula->id }}</td>
                                <td>{{ $aula->curso }}</td>
                                <td>{{ $aula->conteudo }}</td>
                                <td>{{ $aula->nomeaula }}</td>
                                <td>
                                    <form action="/cursos/{{ $curso }}/{{ $aula->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="delete" type="submit">
                                            <img class="icon" src="/img/lixo.png" alt="Lixeira">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="no-aulas">Você ainda não cadastrou aulas no Curso de {{ ucfirst($curso) }}.</p>
            @endif
        @endforeach
    </div>
@endsection
