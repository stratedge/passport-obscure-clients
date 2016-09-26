<?php

namespace Stratedge\PassportObscureClients\Traits\PassportServiceProvider;

trait LoadsPassportObscureClientsMigrations
{
    protected function loadPassportObscureClientsMigrations()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../../database/migrations');
        }
    }
}
