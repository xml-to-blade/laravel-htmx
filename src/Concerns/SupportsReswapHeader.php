<?php

namespace XmlBlade\LaravelHtmx\Concerns;

use XmlBlade\LaravelHtmx\Enums\SwapAttribute;

trait SupportsReswapHeader
{
    protected ?SwapAttribute $reswap = null;

    public function reswap(?SwapAttribute $swap = null): self
    {
        $this->reswap = $swap;

        return $this;
    }

    public function getReswap(): ?string
    {
        return $this->reswap;
    }
}
