<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Path ke rute "home" aplikasi Anda.
     *
     * Biasanya, pengguna diarahkan ke sini setelah autentikasi.
     *
     * @var string
     */
    public const HOME = '/admin/dashboard'; // <-- Sudah disesuaikan ke dasbor admin

    /**
     * Tentukan binding model rute, filter pola, dan konfigurasi rute lainnya.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // Rute API biasanya ada di routes/api.php
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            // Rute Web (yang kita gunakan) ada di routes/web.php
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Konfigurasikan rate limiter untuk aplikasi.
     * (Untuk membatasi jumlah request per menit)
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}