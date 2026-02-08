<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

trait HasTrigger
{
    public function trigger(?string $trigger = null): self
    {
        $this->trigger = $trigger;

        return $this;
    }

    public function getTrigger(): ?string
    {
        return $this->trigger;
    }
}
