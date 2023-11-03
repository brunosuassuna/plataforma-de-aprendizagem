
@extends('layouts.main')

@section('title', 'Brothers Learning')

@section('content')


    <img id="logo" src="/img/modelo5.jpeg" alt="Brothers Learning"> <!-- Logo do site -->
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bem-Vindo à Brothers Learning!
    </h1>

    <p>
        Uma plataforma de aprendizagem online para expandir seus conhecimentos. <br>
        Explore nossos cursos, aprimore suas habilidades e alcance novos patamares acadêmicos.
    </p>

@if (auth()->user()->professor === 1)
    <h2 class="ml-3 text-xl font-semibold text-gray-900"> Bem-Vindo, Professor {{ auth()->user()->name }}!</h2>

    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
        <a class="flex items-center" href="/professor/areaprofessor">
            <img width="50px" src="/img/coaching.png" alt="Área do Professor">

                <strong>Acesse a Área do Professor</strong>

        </a>
    </div>
@else
<h2 class="ml-3 text-xl font-semibold text-gray-900"> Bem-Vindo, Aluno {{ auth()->user()->name }}!</h2>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <a class="flex items-center" href="/">
        <img width="50px" src="/img/videoo-aula.png" alt="Área do Professor">

            <strong>Acesse a Nossos Cursos</strong>

    </a>
</div>


@endif



@endsection

