<?php

namespace App\Providers;

use App\Models\Marca;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $marcas = Marca::orderby('name', 'asc')->get();
        view()->share([
            'marcas' => $marcas
        ]);
    }
}
