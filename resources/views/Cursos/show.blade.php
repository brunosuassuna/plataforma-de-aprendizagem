@extends('layouts.main')

@section('title', $aula->nomeaula)

@section('content')
    <div>
        <h2>{{ $aula->nomeaula }}</h2>
        <div>
            <video width="50%" height="50%" controls autoplay>
                <source src="{{ asset('storage/uploads/' . $aula->videoaula) }}" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        <p>{{ $aula->conteudo }}</p>
    </div>
@endsection
