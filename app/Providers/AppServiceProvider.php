<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Upscope\Repository as UpscopeRepositoryContract ;
use App\Repositories\UpscopeRepository ;
class AppServiceProvider extends ServiceProvider
{


    public $singletons = [
        UpscopeRepositoryContract::class => UpscopeRepository::class
    ];
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
        //
    }
}
