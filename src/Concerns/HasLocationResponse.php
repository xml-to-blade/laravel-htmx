<?php

namespace XmlBlade\LaravelHtmx\Concerns;

trait HasLocationResponse
{
    protected ?string $location = null;

    public function location(?string $path): self
    {
        $this->location = $path;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }
}
