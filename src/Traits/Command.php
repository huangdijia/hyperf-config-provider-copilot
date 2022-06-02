<?php

namespace Huangdijia\HyperfConfigProviderCopilot\Traits;

trait Command
{
    protected array $commands = [];

    public function addCommand(string $command): void
    {
        $this->commands[] = $command;
    }

    public function commands(array $commands): void
    {
        foreach ($commands as $command) {
            $this->addCommand($command);
        }
    }

    public function getCommands(): array
    {
        return $this->commands;
    }
}
