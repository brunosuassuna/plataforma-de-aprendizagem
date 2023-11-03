@extends('layouts.main')

@section('title', 'Brothers Learning')

@section('content')



    <img id="logo" src="/img/modelo5.jpeg" alt="Brothers Learning"> <!-- Logo do site -->
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bem-vindo à Brothers Learning!
    </h1>

    <p>
        Uma plataforma de aprendizagem online para expandir seus conhecimentos. <br>
        Explore nossos cursos, aprimore suas habilidades e alcance novos patamares acadêmicos.
    </p>

@if (auth()->user()->professor === 1)
    <h2 class="ml-3 text-xl font-semibold text-gray-900"> Bem vindo, Professor {{ auth()->user()->name }}!</h2>

    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
        <a class="flex items-center" href="/professor/areaprofessor">
            <img width="50px" src="/img/coaching.png" alt="Área do Professor">
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <strong>Acesse a Área do Professor</strong>
            </h2>
        </a>
    </div>
@else

<div class="course-grid">
    <div class="course-card">
        <a href="/cursos/php" class="course-link" title="PHP: Módulo 01 [20 HORAS]">
            <img src="img/php-logo.svg" alt="Logotipo do Brothers Learning" class="course-image">
            <div class="overlay">
                <h2 class="course-title">PHP</h2>
                <p class="course-description">Mais Informações</p>
            </div>
        </a>
    </div>

    <div class="course-card">
        <a href="/cursos/laravel" class="course-link" title="LARAVEL: Módulo 01 [20 HORAS]">
            <img src="img/laravell.png" alt="Logotipo do Brothers Learning" class="course-image">
            <div class="overlay">
                <h2 class="course-title">Laravel</h2>
                <p class="course-description">Mais Informações</p>
            </div>
        </a>
    </div>

    <div class="course-card">
        <a href="/cursos/mysql" class="course-link" title="MYSQL: Módulo 01 [20 HORAS]">
            <img src="img/mysql-logo.png" alt="Logotipo do Brothers Learning" class="course-image">
            <div class="overlay">
                <h2 class="course-title">MySQL</h2>
                <p class="course-description">Mais Informações</p>
            </div>
        </a>
    </div>

    <div class="course-card">
        <a href="/cursos/docker" class="course-link" title="DOCKER: Módulo 01 [20 HORAS]">
            <img src="img/doocker.png" alt="Logotipo do Brothers Learning" class="course-image">
            <div class="overlay">
                <h2 class="course-title">Docker</h2>
                <p class="course-description">Mais Informações</p>
            </div>
        </a>
    </div>
</div>

@endif


<div id="corpo" >
    <div>
        <div class="course-card">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://www.php.net/manual/pt_BR/faq.installation.php">Documentação Para Instalação</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            O PHP é uma linguagem de programação amplamente utilizada para o desenvolvimento web, reconhecida por sua
            flexibilidade e poder. Seja você um novato ou um desenvolvedor experiente, compreender o PHP é fundamental
            para construir aplicativos web dinâmicos e escaláveis.
        </p>

        <p class="mt-4 text-sm">
            <a href="/cursos/php" class="inline-flex items-center font-semibold text-indigo-700">
                Nosso Curso

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Documentação Para Instalação</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            O Laravel possui uma documentação maravilhosa cobrindo todos os aspectos do framework. Quer você seja novo
            no framework ou tenha experiência anterior, recomendamos a leitura de toda a documentação do começo ao fim.

        </p>

        <p class="mt-4 text-sm">
            <a href="/cursos/laravel" class="inline-flex items-center font-semibold text-indigo-700">
                Nosso Curso

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://dev.mysql.com/doc/">Documentação Para Instalação</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            O MySQL é um sistema de gerenciamento de banco de dados relacional amplamente utilizado e reconhecido por
            sua confiabilidade e eficiência. Seja você um iniciante ou um profissional experiente, compreender o MySQL é
            fundamental para o desenvolvimento e manutenção de aplicações que dependem de um armazenamento de dados
            robusto e eficaz.
        </p>
        <p class="mt-4 text-sm">
            <a href="/cursos/mysql" class="inline-flex items-center font-semibold text-indigo-700">
                Nosso Curso

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://docs.docker.com/desktop/">Documentação Para Instalação</a>
            </h2>

        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            O Docker é uma ferramenta poderosa e versátil que revolucionou a maneira como os aplicativos são
            desenvolvidos, distribuídos e executados. Seja você um novato ou um profissional experiente, a compreensão
            do Docker é fundamental para simplificar processos de desenvolvimento, implementação e gerenciamento de
            aplicativos.
        </p>
        <p class="mt-4 text-sm">
            <a href="/cursos/docker" class="inline-flex items-center font-semibold text-indigo-700">
                Nosso Curso

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
</div>
@endsection
