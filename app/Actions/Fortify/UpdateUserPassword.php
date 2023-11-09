<?php

namespace App\Actions\Fortify;

use App\Models\User; // Importa o modelo User
use Illuminate\Support\Facades\Hash; // Facade para funções de hash
use Illuminate\Support\Facades\Validator; // Facade para validação
use Laravel\Fortify\Contracts\UpdatesUserPasswords; // Contrato para atualizar senhas de usuários

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules; // Inclui regras de validação de senha

    /**
     * Valida e atualiza a senha do usuário.
     *
     * @param  array<string, string>  $input  // Array de entrada contendo a nova senha e a senha atual
     */
    public function update(User $user, array $input): void // Função para atualizar a senha do usuário
    {
        Validator::make($input, [
            'current_password' => ['required', 'string', 'current_password:web'], // Regras de validação para a senha atual
            'password' => $this->passwordRules(), // Aplica as regras de validação para a nova senha
        ], [
            'current_password.current_password' => __('The provided password does not match your current password.'), // Mensagem de erro personalizada para senha atual incorreta
        ])->validateWithBag('updatePassword'); // Valida os dados de entrada com base nas regras definidas e armazena no contexto 'updatePassword'

        $user->forceFill([
            'password' => Hash::make($input['password']), // Atualiza a senha do usuário com a nova senha criptografada
        ])->save(); // Salva a alteração no banco de dados
    }
}
