<?php

namespace Raid\Core\Event\Providers;

use Illuminate\Support\ServiceProvider;
use Raid\Core\Event\Commands\CreateEventCommand;
use Raid\Core\Event\Commands\CreateListenerCommand;
use Raid\Core\Event\Commands\PublishCommand;
use Raid\Core\Event\Traits\Provider\WithEventServiceProviderResolver;

class CommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
