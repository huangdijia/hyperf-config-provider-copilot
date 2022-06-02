<?php

namespace Huangdijia\HyperfConfigProviderCopilot;

trait ConfigProviderCopilot
{
    use Traits\Annotation;
    use Traits\Aspect;
    use Traits\Dependency;
    use Traits\Command;
    use Traits\Listener;
    use Traits\Middleware;
    use Traits\Publish;

    abstract public function process(): void;

    public function __invoke(): array
    {
        $this->process();

        return $this->toArray();
    }

    public function toArray(): array
    {
        return [
            'annotations' => $this->getAnnotations(),
            'aspects' => $this->getAspects(),
            'dependencies' => $this->getDependencies(),
            'commands' => $this->getCommands(),
            'listeners' => $this->getListeners(),
            'middlewares' => $this->getMiddlewares(),
            'publish' => $this->getPublish(),
        ];
    }
}
