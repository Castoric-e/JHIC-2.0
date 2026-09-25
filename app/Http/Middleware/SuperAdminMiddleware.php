<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('admin.login');
        }

        if (auth()->user()->role !== 'super_admin') {
            auth()->logout();
            return redirect()->route('admin.login')->withErrors([
                'email' => 'Akses ditolak. Akun ini tidak memiliki hak akses Super Admin.',
            ]);
        }

        return $next($request);
    }
}
