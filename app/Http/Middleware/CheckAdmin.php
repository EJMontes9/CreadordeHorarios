<?php
// Crear el middleware en `app/Http/Middleware/CheckAdmin.php`
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            Log::info('User authenticated', ['user' => $user, 'permissions' => $user->getAllPermissions()]);

            if ($user->hasRole('Admin')) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}