<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils;

trait HasDescription
{
    public function description(?string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
