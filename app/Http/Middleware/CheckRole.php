<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->professor == '1') {
            return $next($request);
        }

        return redirect('/dashboard'); // Redirecione para o dashboard ou outra rota, se o usuário não tiver o papel de professor
    }
}
