<?php

namespace App\Providers;

Use Schema;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function boot() 
	{
		Schema::defaultStringLength(191);
	}
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}