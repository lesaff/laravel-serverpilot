<?php

namespace Lesaff\LaravelServerPilot;

use Illuminate\Support\ServiceProvider;
use Lesaff\LaravelServerPilot\ServerPilot;

class ServerPilotServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //Bind the ServerPilot wrapper class
        $this->app->bind('Lesaff\LaravelServerPilot\ServerPilot', function ($app) {

            $config = [
                'id' => env('SERVERPILOT_API_ID'),
                'key' => env('SERVERPILOT_API_KEY')
            ];

            return new ServerPilot($config);
        });
    }
}