<?php

namespace Aurawindsurfing\Messenger;

use Illuminate\Support\ServiceProvider;
use Aurawindsurfing\Messenger\Console\DeleteAllData;
use Aurawindsurfing\Messenger\Console\GenerateDummyMessages;

class MessengerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'messenger');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            //Publishing config files.
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('messenger.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/messenger'),
            ], 'views');

            // Publishing the migration files.
            if (empty(glob(database_path('migrations/*_create_threads_table.php')))) {
                $this->publishes([
                    __DIR__.'/../database/migrations/0000_00_00_000000_create_threads_table.php' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_threads_table.php'),
                ], 'migrations');
            }

            // Publishing the migration files.
            if (empty(glob(database_path('migrations/*_create_messages_table.php')))) {
                $this->publishes([
                    __DIR__.'/../database/migrations/0000_00_00_000000_create_messages_table.php' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_messages_table.php'),
                ], 'migrations');
            }

            // Registering package commands.
            $this->commands([
                GenerateDummyMessages::class,
                DeleteAllData::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'messenger');

        // Register package factories to use with main application
        $this->app->make('Illuminate\Database\Eloquent\Factory')->load(__DIR__.'/../database/factories');
    }
}
