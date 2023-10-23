<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    use VerifiesEmails;

    /**
     * Para onde redirecionar os usuários após a verificação.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Crie uma nova instância do controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Garante que o usuário esteja autenticado para acessar as ações de verificação.
        $this->middleware('signed')->only('verify'); // Middleware para verificar a assinatura do URL de verificação.
        $this->middleware('throttle:6,1')->only('verify', 'resend'); // Middleware para limitar as tentativas de verificação e reenvio do email.
    }
}
