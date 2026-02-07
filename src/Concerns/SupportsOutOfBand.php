<?php

namespace XmlBlade\LaravelHtmx\Concerns;

trait SupportsOutOfBand
{
    protected array $outOfBand = [];

    public function addOob(string $content): self
    {
        $this->outOfBand[] = $content;

        return $this;
    }

    public function getOutOfBandAsString(): string
    {
        if (empty($this->outOfBand)) {
            return '';
        }

        return implode('', $this->outOfBand);
    }
}
