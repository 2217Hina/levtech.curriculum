<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 追加
use Illuminate\Pagination\Paginator;

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
        //tailwind->設定を怠ると変な表示になるから
        Paginator::useBootstrap();
        \URL::forceScheme('https');
        $this->app['request']->server->set('HTTPS','on');
    }
}
