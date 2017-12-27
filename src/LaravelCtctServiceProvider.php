<?php
namespace ShravanJbp\LaravelCtct;

use Illuminate\Support\ServiceProvider;

class LaravelCtctServiceProvider extends ServiceProvider
{
     /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       
        $this->publishes([
            __DIR__.'/Config/ctct.php' => base_path('config/ctct.php'),
        ], 'laravelctct');

        $this->publishes([
            __DIR__.'/Views' => base_path('resources/views/vendor/laravelctct'),
        ], 'laravelctct');

        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'laravelctct');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravelctct', function($app) {

            $config = $app->make('config');
            $apiKey = $config->get('ctct.apiKey');
            $token = $config->get('ctct.token');
            return new LaravelCtct($apiKey, $token);

        });

        $this->mergeConfigFrom(
            __DIR__.'/Config/ctct.php', 'laravelctct'
        );
    }


    public function provides() {
        return ['laravelctct'];
    }
}
