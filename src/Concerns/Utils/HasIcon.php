<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils;

trait HasIcon
{
    public function icon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }
}
