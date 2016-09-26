<?php

namespace Stratedge\PassportObscureClients\Console;

use Laravel\Passport\Console\ClientCommand as BaseClientCommand;
use Stratedge\PassportObscureClients\Traits\Console\ClientCommand\CreatesWithId;

class ClientCommand extends BaseClientCommand
{
    use CreatesWithId;
}
