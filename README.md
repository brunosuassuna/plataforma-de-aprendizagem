# Plataforma de Aprendizagem Online 

Bem-vindo à nossa Plataforma de Aprendizagem Online, a Brothers Learning! 
Este projeto foi desenvolvido utilizando PHP, Laravel e MySQL.

## Visão Geral

Nossa plataforma oferece recursos avançados para aprendizagem online, incluindo a criação e gestão de cursos, aulas em vídeo, avaliações, interação entre alunos e professores.

## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados:

- PHP 8.0 ou superior
- Composer
- MySQL

## Instalação

1. Clone o repositório: ` git clone https://github.com/brunosuassuna/plataforma-de-aprendizagem.git`
2. Instale as dependências: `composer install`
3. Copie o arquivo de ambiente: `cp .env.example .env`
4. Configure o arquivo `.env` com suas configurações locais (DB_DATABASE e DB_PORT).
5. Gere a chave de aplicação: `php artisan key:generate`
6. Execute as migrações: `php artisan migrate`
7. Instalar o nodejs: `npm install`
`Caso não consiga executar o comando npm install, instalar o node js direto do link https://nodejs.org/en e executar novamente o npm.install`
9. Iniciar as depedências do nodejs: `npm run dev`
10. Inicie o servidor local: `php artisan serve`

