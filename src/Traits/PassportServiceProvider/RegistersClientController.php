<?php

namespace Stratedge\PassportObscureClients\Traits\PassportServiceProvider;

use Laravel\Passport\ClientController as BaseClientController;
use Stratedge\PassportObscureClients\ClientController;

trait RegistersClientController
{
    protected function registerClientController()
    {
        $this->app->bind(BaseClientController::class, function ($app) {
            return $app->make(ClientController::class);
        });
    }
}
