<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils;

trait HasHelperText
{
    public function help(?string $help = null): self
    {
        $this->help = $help;

        return $this;
    }

    public function getHelperText(): ?string
    {
        return $this->help;
    }
}
