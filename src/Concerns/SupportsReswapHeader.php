<?php

namespace XmlBlade\LaravelHtmx\Concerns;

use XmlBlade\LaravelHtmx\Enums\SwapAttribute;

trait SupportsReswapHeader
{
    protected ?SwapAttribute $reswap = null;

    public function reswap(?SwapAttribute $swap = null): self
    {
        $this->reswap = $swap;

        if ($swap) {
            $this->headers->set('HX-Reswap', $swap->value);
        }

        return $this;
    }

    public function getReswap(): ?SwapAttribute
    {
        return $this->reswap;
    }
}
