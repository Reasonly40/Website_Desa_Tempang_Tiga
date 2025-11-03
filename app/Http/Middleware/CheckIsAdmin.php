<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// Anda tidak perlu 'use Auth;' jika menggunakan helper auth()

class CheckIsAdmin
{
    /**
     * Menangani request yang masuk.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah user sudah login DAN apakah user adalah admin
        //    Kita asumsikan Anda punya kolom boolean 'is_admin' di tabel 'users'
        
        if (!auth()->check() || !auth()->user()->is_admin) {
            // Jika user TIDAK login, ATAU user login TAPI BUKAN admin,
            // maka kita hentikan request dan tampilkan halaman 404 Not Found.
            // Ini adalah praktik keamanan yang baik agar non-admin
            // tidak tahu bahwa halaman tersebut ada.
            abort(404);
        }

        // 2. Jika user adalah admin, izinkan request untuk melanjutkan
        return $next($request);
    }
}
