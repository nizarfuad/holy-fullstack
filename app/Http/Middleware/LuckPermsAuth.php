<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LuckPermsAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('luckperms')->check()) {
            return redirect()->route('lp-loginPage')->withErrors(['message' => 'Silakan login terlebih dahulu!']);
        }

        return $next($request);
    }
}
