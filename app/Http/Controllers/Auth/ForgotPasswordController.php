<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Crie uma nova instância do controlador.
     *
     * @return void
     */
    public function __construct()
    {
        // Nenhuma middleware é definida aqui, mas você pode adicionar middleware, se necessário.
    }
}
