<?php

namespace XmlBlade\LaravelHtmx\Concerns;

trait SupportsModals
{
    public function openModal(string $name): static
    {
        return $this->addTriggerAfterSettle('openModal', $name);
    }

    public function closeModal(string $name): static
    {
        return $this->addTriggerAfterSettle('closeModal', $name);
    }

    public function closeModals(bool $close = true): static
    {

        if ($close) {
            $this->addTrigger('closeAllModals');
        }

        return $this;
    }
}
