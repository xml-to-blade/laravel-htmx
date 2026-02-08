<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

trait HasSelect
{
    public function select(?string $select = null): self
    {
        $this->select = $select;

        return $this;
    }

    public function getSelect(): ?string
    {
        return $this->select;
    }
}
