<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils;

trait HasOptions
{
    public function options(array $options = []): self
    {
        $this->options = $options;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
