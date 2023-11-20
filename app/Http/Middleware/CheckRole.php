<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Permission\Traits\HasRoles;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Se o usuário não estiver autenticado, redirecione para a página inicial
        if (! $request->user()) {
            return redirect('/');
        }
    
        // Se o usuário for 'admin' ou 'comercial', permita a passagem
        if (in_array($request->user()->role, ['admin', 'comercial'])) {
            return $next($request);
        }
    
        // Para todos os outros usuários, redirecione para a página inicial
        return redirect('/');
    }
    
    
}
