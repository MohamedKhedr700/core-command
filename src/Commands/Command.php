<?php

namespace Raid\Core\Command\Traits;

use Raid\Core\Command\Traits\Command\WithCommandHelper;
use Illuminate\Console\Command as IlluminateCommand;
class Command extends IlluminateCommand
{
    use WithCommandHelper;

    /**
     * The name and signature of the console command.
     */
    protected $signature = '';

    /**
     * The console command description.
     */
    protected $description = '';
}
