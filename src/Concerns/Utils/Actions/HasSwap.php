<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

use XmlBlade\LaravelHtmx\Enums\SwapAttribute;

trait HasSwap
{
    public function swap(?SwapAttribute $swap = null): self
    {
        $this->swap = $swap;

        return $this;
    }

    public function getSwap(): ?SwapAttribute
    {
        return $this->swap;
    }
}
