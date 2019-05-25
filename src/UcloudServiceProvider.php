<?php


namespace Knight\Ucloud;

use Illuminate\Support\ServiceProvider;

class UcloudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('ucloud', function () {
            return new UcloudClient();
        });
    }
}
