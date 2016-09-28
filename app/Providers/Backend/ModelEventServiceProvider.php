<?php

namespace App\Providers\Backend;

use App\Events\Cache\ClearMenuCacheEvent;
use Illuminate\Support\ServiceProvider;
use App\Models\Backend\Menu;
class ModelEventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    /**
     * 监听菜单模型事件
     */
    public function listenMenuModelEvents()
    {
        Menu::saved(function () {
            event(new ClearMenuCacheEvent());
        });

        Menu::deleted(function () {
            event(new ClearMenuCacheEvent());
        });
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
