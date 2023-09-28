<?php

namespace Raid\Core\Command\Traits;

use Raid\Core\Command\Traits\Command\WithCommandHelper;
use Illuminate\Console\Command as IlluminateCommand;
class Command extends IlluminateCommand
{
    use WithCommandHelper;

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
    }
}
