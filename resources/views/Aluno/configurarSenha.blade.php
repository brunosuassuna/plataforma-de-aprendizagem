@extends('layout.main')

@section('title', 'Configurar Senha')

@section('content')
<div class="container">
    <h1 class="display-4">Configurar Senha</h1>
    <form method="post" action="{{ route('aluno.configurar-senha') }}">
        @csrf
        <div class="form-group">
            <label for="senha_aluno">Senha do Aluno</label>
            <input type="password" name="senha_aluno" id="senha_aluno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="senha_aluno_confirmation">Confirme a Senha do Aluno</label>
            <input type="password" name="senha_aluno_confirmation" id="senha_aluno_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Senha do Aluno</button>
    </form>
</div>
@endsection
