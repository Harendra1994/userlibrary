<?php
namespace Library\UserRolePermission;

use Illuminate\Support\ServiceProvider;

class UserRolePermissionServiceProvider  extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../config/user-role-permission.php' => config_path('user-role-permission.php'),
        ]);
    }

    public function register()
    {
        // Register any bindings or services if necessary
    }
}
