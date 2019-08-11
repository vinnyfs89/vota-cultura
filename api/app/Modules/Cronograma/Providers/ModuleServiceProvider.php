<?php

namespace App\Modules\Cronograma\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('cronograma', 'Resources/Lang', 'app'), 'cronograma');
        $this->loadViewsFrom(module_path('cronograma', 'Resources/Views', 'app'), 'cronograma');
        $this->loadMigrationsFrom(module_path('cronograma', 'Database/Migrations', 'app'), 'cronograma');
        $this->loadConfigsFrom(module_path('cronograma', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('cronograma', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
