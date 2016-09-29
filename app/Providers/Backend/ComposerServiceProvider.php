<?php

namespace App\Providers\Backend;

use Illuminate\Support\ServiceProvider;


class ComposerServiceProvider extends ServiceProvider
{
    private $main, $menu, $user, $role, $permission;

    public function __construct()
    {
        $this->main = [
            'backend.common.sildermenu'
        ];

        /*$this->userInfo = [
            'backend.layout.sidebar',
            'backend.layout.header',
            'backend.user.profile'
        ];*/
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*view()->composer($this->userInfo, function ($view) {
            $userInfo = \Auth::user();
            $view->with(compact('userInfo'));
        });*/

        view()->composer($this->main, 'App\Http\ViewComposers\Backend\MainComposer');
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
