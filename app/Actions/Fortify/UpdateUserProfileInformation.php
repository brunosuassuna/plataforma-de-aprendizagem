<?php

namespace App\Actions\Fortify;

use App\Models\User; // Importa o modelo User
use Illuminate\Contracts\Auth\MustVerifyEmail; // Interface para usuários com verificação de email
use Illuminate\Support\Facades\Validator; // Facade para validação
use Illuminate\Validation\Rule; // Classe Rule para regras de validação personalizadas
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation; // Contrato para atualizar informações do perfil do usuário

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Valida e atualiza as informações do perfil do usuário fornecido.
     *
     * @param  array<string, string>  $input  // Array de entrada contendo informações do perfil
     */
    public function update(User $user, array $input): void // Função para atualizar as informações do perfil do usuário
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'], // Regras de validação para o nome
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)], // Regras de validação para o email
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'], // Regras de validação para a foto do perfil
        ])->validateWithBag('updateProfileInformation'); // Valida os dados de entrada com base nas regras definidas e armazena no contexto 'updateProfileInformation'

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']); // Atualiza a foto do perfil, se uma nova foto for fornecida
        }

        if ($input['email'] !== $user->email && $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input); // Se o email for diferente e o usuário requer verificação, chama a função para atualizar o usuário verificado
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save(); // Atualiza o nome e o email do usuário e salva no banco de dados
        }
    }

    /**
     * Atualiza as informações do perfil do usuário verificado fornecido.
     *
     * @param  array<string, string>  $input  // Array de entrada contendo informações do perfil
     */
    protected function updateVerifiedUser(User $user, array $input): void // Função para atualizar as informações do perfil do usuário verificado
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null, // Define a data de verificação do email como nula para reenviar o email de verificação
        ])->save(); // Atualiza as informações e salva no banco de dados

        $user->sendEmailVerificationNotification(); // Reenvia o email de verificação
    }
}
