<?php

namespace App\Providers\Backend;

use App\Repositories\Backend\ActionRepository;
use App\Repositories\Backend\AdminRepository;
use App\Repositories\Backend\PermissionRepository;
use App\Repositories\Backend\RoleRepository;
use App\Repositories\Backend\MenuRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         $configuration=realpath(__DIR__ . '/../../../Config/repository.php');
         $this->mergeConfigFrom($configuration,'repository');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMenuRepository();
        $this->registerAdminRepository();
        $this->registerRoleRepository();
        $this->registerPermissionRepository();
        $this->registerActionRepository();
    }
    public function registerMenuRepository()
    {
        $this->app->singleton('menurepository', function ($app) {
            $model = config('repository.models.menu');
            $menu = new $model();
            $validator = $app['validator'];

            return new MenuRepository($menu, $validator);
        });
    }

    public  function registerAdminRepository(){
        $this->app->singleton('adminrepository',function($app){
            $model=config('repository.models.admin');
            $admin=new $model;
            $validator=$app['validator'];
            return new AdminRepository($admin,$validator);
        });
    }
    public  function registerRoleRepository(){
        $this->app->singleton('rolerepository',function($app){
            $model=config('repository.models.role');
            $admin=new $model;
            $validator=$app['validator'];
            return new RoleRepository($admin,$validator);
        });
    }
    public function registerPermissionRepository()
    {
            $this->app->singleton('permissionrepository', function ($app) {
            $model = config('repository.models.permission');
            $permission = new $model();
            $validator = $app['validator'];

            return new PermissionRepository($permission, $validator);
        });
    }
    public function registerActionRepository()
    {
        $this->app->singleton('actionrepository', function ($app) {
            $model = config('repository.models.action');
            $action = new $model();
            $validator = $app['validator'];

            return new ActionRepository($action, $validator);
        });
    }

}
