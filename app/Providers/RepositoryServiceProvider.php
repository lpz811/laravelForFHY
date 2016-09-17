<?php

namespace App\Providers;

use App\Repositories\AdminRepository;
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
         $configuration=realpath(__DIR__.'/../../Config/repository.php');
         $this->mergeConfigFrom($configuration,'repository');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAdminRepository();
    }

    public  function registerAdminRepository(){
        $this->app->singleton('adminrepository',function($app){
            $model=config('repository.models.admin');
            $admin=new $model;
            $validator=$app['validator'];
            return new AdminRepository($admin,$validator);
        });
    }


    public function dd()
    {
        return 'ddd';
    }
}
