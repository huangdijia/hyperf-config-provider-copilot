<?php

namespace Huangdijia\HyperfConfigProviderCopilot\Traits;

trait Middleware
{
    protected array $middlewares = [];

    public function addMiddleware(string $server, string $middleware): void
    {
        if (! isset($this->middlewares[$server])) {
            $this->middlewares[$server] = [];
        }

        $this->middlewares[$server][] = $middleware;
    }
}
