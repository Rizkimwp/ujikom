<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Memastikan pengguna terautentikasi dan memiliki role yang sesuai
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // Jika tidak memiliki role yang sesuai, arahkan ke halaman login
        return redirect()->route('login');
    }

    // Tambahkan Ini Di
}
