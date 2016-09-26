<?php

namespace Stratedge\PassportObscureClients\Traits\PassportServiceProvider;

use Laravel\Passport\Client as BaseClient;
use Stratedge\PassportObscureClients\Client;

trait RegistersClient
{
    protected function registerClient()
    {
        $this->app->bind(BaseClient::class, function ($app) {
            return $app->make(Client::class);
        });
    }
}
