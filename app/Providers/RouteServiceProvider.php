<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * La ruta a la que se redirige después de login/register.
     */
    public const HOME = '/contacto'; // cámbialo a lo que quieras

    public function boot(): void
    {
        parent::boot();
    }
}
