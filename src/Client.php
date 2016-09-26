<?php

namespace Stratedge\PassportObscureClients;

use Laravel\Passport\Client as BaseClient;
use Stratedge\PassportObscureClients\Traits\Client\HasStringId;

class Client extends BaseClient
{
    use HasStringId;
}
