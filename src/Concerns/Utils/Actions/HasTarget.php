<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

trait HasTarget
{
    public function target(?string $target = null): self
    {
        $this->target = $target;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }
}
