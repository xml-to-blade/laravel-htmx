<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils;

trait HasLabel
{
    public function label(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}
