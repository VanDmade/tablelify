<?php

namespace VanDmade\Tablelify;

use Illuminate\Support\ServiceProvider;

class TablelifyServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->publishes([
            __DIR__.'/../config.php' => config_path('tablelify.php'),
            __DIR__.'/../languages/en.php' => $this->app->langPath('en/tablelify.php'),
        ]);
    }

}