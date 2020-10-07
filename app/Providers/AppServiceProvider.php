<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        $pengguna = array(
            1 => 'Administrator',
            2 => 'Pimpinan',
            3 => 'Karyawan',
        );

        View::share('pengguna', $pengguna);
        Schema::defaultStringLength(191);
    }
}
