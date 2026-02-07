<?php

namespace XmlBlade\LaravelHtmx\Services;

class MenuItem extends Menu
{
    public function __construct(
        protected string $label = 'Item',
        protected ?string $icon = null,
        protected ?string $shortcut = null,
        protected bool $disabled = false,
        protected string $variant = 'soft',
    ) {
        //
    }

    public function label(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function icon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function shortcut(?string $shortcut): self
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }

    public function danger(): self
    {
        $this->variant = 'danger';

        return $this;
    }

    public function disabled(): self
    {
        $this->disabled = true;

        return $this;
    }

    public function isSubmenu(): bool
    {
        if ($this->getItems() > 0) {
            return true;
        }

        return false;
    }
}
