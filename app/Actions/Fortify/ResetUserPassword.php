<?php

namespace App\Actions\Fortify;

use App\Models\User; // Importa o modelo User
use Illuminate\Support\Facades\Hash; // Facade para funções de hash
use Illuminate\Support\Facades\Validator; // Facade para validação
use Laravel\Fortify\Contracts\ResetsUserPasswords; // Contrato para redefinir senhas de usuários

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules; // Inclui regras de validação de senha

    /**
     * Valida e redefine a senha esquecida do usuário.
     *
     * @param  array<string, string>  $input  // Array de entrada contendo a nova senha
     */
    public function reset(User $user, array $input): void // Função para redefinir a senha do usuário
    {
        Validator::make($input, [ // Utiliza o Validador para validar a nova senha
            'password' => $this->passwordRules(), // Aplica as regras de validação de senha
        ])->validate(); // Valida o dado de entrada com base nas regras definidas

        $user->forceFill([ // Preenche os dados do usuário
            'password' => Hash::make($input['password']), // Atualiza a senha do usuário com a nova senha criptografada
        ])->save(); // Salva a alteração no banco de dados
    }
}
