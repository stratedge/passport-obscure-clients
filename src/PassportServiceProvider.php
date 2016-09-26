<?php

namespace Stratedge\PassportObscureClients;

use Laravel\Passport\PassportServiceProvider as BasePassportServiceProvider;
use Stratedge\PassportObscureClients\Traits\PassportServiceProvider\LoadsPassportObscureClientsMigrations;
use Stratedge\PassportObscureClients\Traits\PassportServiceProvider\RegistersClient;
use Stratedge\PassportObscureClients\Traits\PassportServiceProvider\RegistersClientCommand;
use Stratedge\PassportObscureClients\Traits\PassportServiceProvider\RegistersClientController;
use Stratedge\PassportObscureClients\Traits\PassportServiceProvider\RegistersClientRepository;

class PassportServiceProvider extends BasePassportServiceProvider
{
    use LoadsPassportObscureClientsMigrations,
        RegistersClient,
        RegistersClientCommand,
        RegistersClientController,
        RegistersClientRepository;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //Load package migrations
        $this->loadPassportObscureClientsMigrations();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //Register custom Client
        $this->registerClient();

        //Register custom ClientRepository
        $this->registerClientRepository();

        //Register custom Console\ClientCommand
        $this->registerClientCommand();

        //Register custom Http\Controllers\ClientController
        $this->registerClientController();

        $this->registerAuthorizationServer();

        $this->registerResourceServer();

        $this->registerGuard();
    }
}
