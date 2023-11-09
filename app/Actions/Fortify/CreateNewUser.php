<?php

namespace App\Actions\Fortify;

use App\Models\User; // Importando o modelo User
use Illuminate\Support\Facades\Hash; // Facade para funções de hash
use Illuminate\Support\Facades\Validator; // Facade para validação
use Laravel\Fortify\Contracts\CreatesNewUsers; // Interface para criar novos usuários
use Laravel\Jetstream\Jetstream; // Biblioteca Jetstream

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules; // Incluindo regras adicionais de validação de senha

    /**
     * Valida e cria um novo usuário registrado.
     *
     * @param  array  $input  // Array de entrada contendo dados do usuário
     */
    public function create(array $input): User // Função para criar um novo usuário e retornar um modelo User
    {
        Validator::make($input, [ // Usando o Validador para validar os dados de entrada
            'name' => ['required', 'string', 'max:255'], // Regras de validação para o nome
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Regras de validação para o email
            'password' => $this->passwordRules(), // Aplicando regras de validação de senha
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '', // Verificando aceitação de termos e política de privacidade se a feature existir
            'professor' => ['boolean'], // Regra de validação para um campo booleano 'professor'
        ])->validate(); // Validando os dados de entrada com base nas regras definidas

        return User::create([ // Criando um novo usuário no banco de dados
            'name' => $input['name'], // Atribuindo o campo 'name' dos dados de entrada
            'email' => $input['email'], // Atribuindo o campo 'email' dos dados de entrada
            'password' => Hash::make($input['password']), // Criptografando e atribuindo o campo 'password' dos dados de entrada
            'professor' => $input['professor'], // Atribuindo o campo 'professor' dos dados de entrada
        ]);
    }
}
