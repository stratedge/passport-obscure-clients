<?php

namespace Stratedge\PassportObscureClients;

use Laravel\Passport\ClientRepository as BaseClientRepository;
use Stratedge\PassportObscureClients\Traits\ClientRepository\CreatesWithId;

class ClientRepository extends BaseClientRepository
{
    use CreatesWithId;
}
