<?php

namespace Modules\Auth\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // 1. Cek apakah user sudah login atau belum
        if (! $request->user()) {
            return redirect()->route('login');
        }

        // 2. Cek apakah role user yang sedang login sesuai dengan role yang diizinkan
        if (! in_array($request->user()->role, $roles)) {
            abort(403, 'Unauthorized action.');
        }

        // 3. Jika lolos, lanjutkan request ke tujuan
        return $next($request);
    }
}