<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use Jenssegers\Agent\Agent;


class AgentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $agent = new Agent();

        View::share('agent', $agent);
    }

    public function register()
    {
        //
    }
}
