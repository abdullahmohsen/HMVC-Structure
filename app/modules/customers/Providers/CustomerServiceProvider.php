<?php

namespace Customers\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\File;

class CustomerServiceProvider extends ServiceProvider
{

    public const HOME = '/';

    // protected $namespace = 'Customers\\Http\\Controllers';


    public function boot()
    {
        // $this->configureRateLimiting();

        // $ds = DIRECTORY_SEPARATOR;


        // dd(config());


        // $this->routes(function() {

        //     Route::middleware('web')
        //         ->namespace($this->namespace)
        //         ->group(base_path('App/modules/Customers/routes/web.php'));
        //     // dd(config());
        // });

        $moduleName = basename(dirname(__DIR__, 1));


        config([
            $moduleName => File::getRequire(loadConfigFile($moduleName, 'route'))
            // 'customers' => File::getRequire(__DIR__ .'/../config/route.php')
        ]);

        $this->loadRoutesFrom(loadRoutes($moduleName, 'web'));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);
        $this->loadTranslationsFrom(loadTranslations($moduleName), $moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));

    }

    protected function configureRateLimiting()
    {

    }

}
