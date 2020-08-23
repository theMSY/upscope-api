<?php

namespace App\Providers;

use App\Contracts\CrankWheel\Repository as CrankWheelRepositoryContract;
use App\Contracts\Upscope\Repository as UpscopeRepositoryContract;
use App\Repositories\CrankWheelRepository;
use App\Repositories\UpscopeRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider {


    public $singletons = [
        UpscopeRepositoryContract::class => UpscopeRepository::class,
        CrankWheelRepositoryContract::class => CrankWheelRepository::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
    }
}
