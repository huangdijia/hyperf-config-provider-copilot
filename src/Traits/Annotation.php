<?php

namespace Huangdijia\HyperfConfigProviderCopilot\Traits;

trait Annotation
{
    protected array $annotations = [
        'scan' => [
            'class_map' => [],
            'ignore_annotations' => [],
            'paths' => [],
        ],
    ];

    public function addClassMap(string $name, string $path): void
    {
        $this->annotations['scan']['class_map'][$name] = $path;
    }

    public function classMap(array $classmap): void
    {
        foreach ($classmap as $name => $path) {
            $this->addClassMap($name, $path);
        }
    }

    public function addIgnoreAnnotation(string $annotation): void
    {
        $this->annotations['scan']['ignore_annotations'][] = $annotation;
    }

    public function ignoreAnnotations(array $annotations): void
    {
        foreach ($annotations as $annotation) {
            $this->addIgnoreAnnotation($annotation);
        }
    }

    public function addScanPath(string $path): void
    {
        $this->annotations['scan']['paths'] = $path;
    }

    public function scanPaths(array $paths): void
    {
        foreach ($paths as $path) {
            $this->addScanPath($path);
        }
    }

    public function getAnnotations(): array
    {
        return $this->annotations;
    }
}
