<?php

namespace App\Listeners\Subscribe;

use App\Facades\Backend\AdminRepository;
use App\Facades\MenuRepository;
use App\Facades\UserRepository;
use App\Presenters\Backend\MenuPresenter;

/**
 * 缓存事件订阅器
 *
 * @package App\Listeners\Subscribe
 */
class CacheEventSubscribe
{
    /**
     * 注册侦听器的订阅者。
     *
     * @param  Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'App\Events\Cache\ClearAdminPermissionCacheEvent',
            'App\Listeners\Subscribe\CacheEventSubscribe@clearAdminPermissionCache'
        );

        $events->listen(
            'App\Events\Cache\ClearMenuCacheEvent',
            'App\Listeners\Subscribe\CacheEventSubscribe@clearMenuCache'
        );
    }

    /**
     * 清除用户权限缓存
     */
    public function clearAdminPermissionCache()
    {
        AdminRepository::clearCache();
    }

    /**
     * 清除菜单缓存
     */
    public function clearMenuCache()
    {

        \App\Facades\Backend\MenuRepository::clearCache();
    }
}
