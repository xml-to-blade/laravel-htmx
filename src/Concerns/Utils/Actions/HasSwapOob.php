<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

use XmlBlade\LaravelHtmx\Enums\SwapAttribute;

trait HasSwapOob
{
    protected string|SwapAttribute|null $swapOob = null;

    public function swapOob(string|SwapAttribute|null $swap = null): self
    {
        $this->swapOob = $swap;

        return $this;
    }

    public function getSwapOob(): string|SwapAttribute|null
    {
        return $this->swapOob;
    }
}
