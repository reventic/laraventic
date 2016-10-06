<?php

namespace Reventic\Laraventic\Providers;

use Illuminate\Support\ServiceProvider;
use Reventic\ReventicSDK\Tracker;

class Laraventic extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('reventic.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        if ($apiKey = $this->app->config->get('reventic.apiKey')) {
            $this->app->bind('laraventic', function () use ($apiKey) {
                return new Tracker($apiKey, $this->app->config->get('reventic.demo'));
            });
        }
    }
}