<?php

namespace App\Providers;

use App\Services\TestIocService;
use Illuminate\Support\ServiceProvider;

class TestIocServiceProvider extends ServiceProvider
{
    /**
     * 将服务接口注绑定至服务容器
     *
     * @return void
     */
    public function register()
    {
        // demo1 写法
        $this->app->bind('App\Interfaces\TestIocInterface', function(){
            return new TestIocService();
        });

        // demo2 写法
        //$this->app->bind('App\Interfaces\TestInterface', TestService::class);

        // demo3 写法
        //$this->app->bind('App\Interfaces\TestIocInterface', 'App\Services\TestIocService');

        // 单例写法
        $this->app->singleton('TestIocInterface', function(){
            return new TestIocService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
