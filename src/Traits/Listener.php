<?php

namespace Huangdijia\HyperfConfigProviderCopilot\Traits;

trait Listener
{
    protected array $listeners = [];

    public function addListener(string $listener): void
    {
        $this->listeners[] = $listener;
    }

    public function listeners(array $listeners): void
    {
        foreach ($listeners as $listener) {
            $this->addListener($listener);
        }
    }

    public function getListeners(): array
    {
        return $this->listeners;
    }
}
