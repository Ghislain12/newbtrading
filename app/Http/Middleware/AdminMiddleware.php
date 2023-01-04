<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur authentifié a le rôle d'admin
        if (Auth::check() && User::isAdmin(Auth::id())) {
            return $next($request);
        }
        // Si l'utilisateur n'a pas le rôle d'admin, renvoyer une réponse 403 (Accès refusé)
        return response('Accès refusé.', 403);
    }
}
