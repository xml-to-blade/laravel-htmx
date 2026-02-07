<?php

namespace XmlBlade\LaravelHtmx\Concerns;

trait HasLocationResponse
{
    protected ?string $location = null;

    public function location(?string $path): self
    {
        $this->location = $path;

        $this->headers->set('HX-Location', $path);

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }
}
