<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilamentAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // If not logged in, redirect to login
        if (! $user) {
            return redirect()->route('filament.auth.login');
        }

        // If user cannot access Filament, redirect or abort
        if (! $user->canAccessFilament()) {
            abort(403, 'You do not have access to this page.');
            // Or redirect to home:
            // return redirect('/');
        }

        return $next($request);
    }
}
