<?php

namespace Huangdijia\HyperfConfigProviderCopilot\Traits;

trait Aspect
{
    protected array $aspects = [];

    public function addAspect(string $aspect): void
    {
        $this->aspects[] = $aspect;
    }

    public function aspects(array $aspects): void
    {
        foreach ($aspects as $aspect) {
            $this->addAspect($aspect);
        }
    }

    public function getAspects(): array
    {
        return $this->aspects;
    }
}
