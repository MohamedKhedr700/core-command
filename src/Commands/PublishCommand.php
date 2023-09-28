<?php

namespace Raid\Core\Command\Commands;

use Raid\Core\Command\Traits\Command\WithCreateCommand;
use Raid\Core\Command\Traits\Command\WithPublishCommand;

class PublishCommand extends Command
{
    use WithPublishCommand;
}
