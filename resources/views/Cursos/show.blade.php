@extends('layouts.main')

@section('title', '$aula->nomeaula')

@section('content')

    <div>
        <h2>{{ $aula->nomeaula }}</h2>
        <div>
            <video src="/app/uploads/{{ $aula->videoaula }}"></video>
        </div>
        <p>{{ $aula->conteudo }}</p>


    </div>

@endsection
