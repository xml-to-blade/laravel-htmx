<?php

namespace XmlBlade\LaravelHtmx\Services;

use XmlBlade\LaravelHtmx\Concerns\Utils;

class MenuItem extends Menu
{
    use Utils\HasIcon;
    use Utils\HasLabel;

    public function __construct(
        protected string $label = 'Item',
        protected ?string $icon = null,
        protected ?string $shortcut = null,
        protected bool $disabled = false,
        protected string $variant = 'soft',
    ) {
        //
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
