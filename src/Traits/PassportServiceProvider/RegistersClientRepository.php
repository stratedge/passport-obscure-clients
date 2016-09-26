<?php

namespace Stratedge\PassportObscureClients\Traits\PassportServiceProvider;

use Laravel\Passport\ClientRepository as BaseClientRepository;
use Stratedge\PassportObscureClients\ClientRepository;

trait RegistersClientRepository
{
    protected function registerClientRepository()
    {
        $this->app->bind(BaseClientRepository::class, function ($app) {
            return $app->make(ClientRepository::class);
        });
    }
}
