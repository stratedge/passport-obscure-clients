<?php

namespace Stratedge\PassportObscureClients\Http\Controllers;

use Laravel\Passport\Http\Controllers\ClientController as BaseClientController;
use Stratedge\PassportObscureClients\Traits\Http\Controllers\StoresWithId;

class ClientController extends BaseClientController
{
    use StoresWithId;
}
