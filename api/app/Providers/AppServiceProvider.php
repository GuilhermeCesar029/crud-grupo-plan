<?php

namespace App\Providers;

use App\Models\Eletrodomestico;
use App\Repositories\EletroRepositoryEloquent;
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
        $this->app->bind('App\Repositories\EletroRepositoryInterface', 'EletroRepositoryEloquent');

        $this->app->bind('App\Repositories\EletroRepositoryInterface', function (){
            return new EletroRepositoryEloquent(new Eletrodomestico());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
