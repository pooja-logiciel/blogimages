<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\AuthRepositoryInterface;
use App\Repository\AuthRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
