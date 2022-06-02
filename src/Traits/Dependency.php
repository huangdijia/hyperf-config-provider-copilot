<?php

namespace Huangdijia\HyperfConfigProviderCopilot\Traits;

use Closure;

trait Dependency
{
    protected array $dependencies = [];

    /**
     *
     * @param string $name
     * @param string|Closure|object $entry
     * @return void
     */
    public function bind(string $name, $entry): void
    {
        $this->dependencies[$name] = $entry;
    }

    public function dependencies(array $dependencies): void
    {
        foreach ($dependencies as $name => $entry) {
            $this->bind($name, $entry);
        }
    }

    public function getDependencies(): array
    {
        return $this->dependencies;
    }
}
