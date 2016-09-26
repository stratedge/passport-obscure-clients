<?php

namespace Stratedge\PassportObscureClients\Traits\PassportServiceProvider;

use Laravel\Passport\ClientCommand as BaseClientCommand;
use Stratedge\PassportObscureClients\ClientCommand;

trait RegistersClientCommand
{
    protected function registerClientCommand()
    {
        $this->app->bind(BaseClientCommand::class, function ($app) {
            return $app->make(ClientCommand::class);
        });
    }
}
