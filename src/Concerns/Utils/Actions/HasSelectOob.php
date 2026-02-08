<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

trait HasSelectOob
{
    protected ?string $selectOob = null;

    public function selectOob(?string $select = null): self
    {
        $this->selectOob = $select;

        return $this;
    }

    public function getSelectOob(): ?string
    {
        return $this->selectOob;
    }
}
