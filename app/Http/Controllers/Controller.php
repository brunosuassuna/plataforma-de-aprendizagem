<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // Trait para autorização de requisições
use Illuminate\Foundation\Validation\ValidatesRequests; // Trait para validação de requisições
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests; // Utiliza o trait AuthorizesRequests para autorização de requisições
    use ValidatesRequests; // Utiliza o trait ValidatesRequests para validação de requisições
}
