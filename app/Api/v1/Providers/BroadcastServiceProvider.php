<?php

namespace Api\v1\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes(["prefix" => "api/v1", "middleware" => ["auth:api"]]);

        require app_path('Api/v1/channels.php');
    }
}
