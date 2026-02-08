<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

trait SupportsConfirmation
{
    protected ?string $confirm = null;

    public function confirm(?string $confirm = null): self
    {
        $this->confirm = $confirm;

        return $this;
    }

    public function getConfirm(): ?string
    {
        return $this->confirm;
    }
}
