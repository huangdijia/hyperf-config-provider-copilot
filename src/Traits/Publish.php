<?php

namespace Huangdijia\HyperfConfigProviderCopilot\Traits;

trait Publish
{
    protected array $publishes = [];

    public function addPublish(string $source, string $destination): void
    {
        $this->publishes[$source] = $destination;
    }

    public function publishes(array $paths): void
    {
        foreach ($paths as $path => $target) {
            $this->addPublish($path, $target);
        }
    }
}
