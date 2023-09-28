<?php

namespace Raid\Core\Command\Traits\Command;

trait WithPublishCommand
{
    /**
     * Publish the command.
     */
    public function publish(string $tag): void
    {
        $this->call('vendor:publish', [
            '--tag' => $tag,
        ]);
    }
}
