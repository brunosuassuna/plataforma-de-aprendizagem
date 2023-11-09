<?php

namespace App\Actions\Jetstream;

use App\Models\User; // Importa o modelo User
use Laravel\Jetstream\Contracts\DeletesUsers; // Contrato para deletar usuários

class DeleteUser implements DeletesUsers
{
    /**
     * Deleta o usuário fornecido.
     */
    public function delete(User $user): void // Função para deletar um usuário
    {
        $user->deleteProfilePhoto(); // Deleta a foto do perfil do usuário
        $user->tokens->each->delete(); // Deleta todos os tokens de acesso associados ao usuário
        $user->delete(); // Deleta o usuário permanentemente do banco de dados
    }
}
