<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        /*
        if ($request->expectsJson()) {
            return null;
        }
        
        // Vérifiez si l'utilisateur est un modèle User
        if (Auth::guard('web')->check()) {
            return route('dashboard');
        }

        // Vérifiez si l'utilisateur est un modèle Client
        if (Auth::guard('clients')->check()) {
            return route('dashboard');
        }
        
        return $request->expectsJson() ? null :  route('dashboard');
        */

        if ($request->expectsJson()) {
            return null;
        }
        
        $redirectTo = null;
        
        if (Auth::guard('web')->check()) {
            // L'administrateur est connecté
            $redirectTo = route('dashboard');
        } elseif (Auth::guard('clients')->check()) {
            // Un client est connecté
            $redirectTo = route('dashboard');
        } else {
            // Aucun utilisateur n'est connecté (peut-être un invité)
            $redirectTo = route('dashboard');
        }
        
        return $redirectTo;
        
        
    }
}
