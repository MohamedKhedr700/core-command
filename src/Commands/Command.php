<?php

namespace Raid\Core\Command\Traits;

use Illuminate\Console\Command as IlluminateCommand;
use Raid\Core\Command\Traits\Command\WithCommandHelper;
use Raid\Core\Command\Traits\Command\WithCreateCommand;

class Command extends IlluminateCommand
{
    use WithCommandHelper,
        WithCreateCommand;
}