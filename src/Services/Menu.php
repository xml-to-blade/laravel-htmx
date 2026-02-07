<?php

namespace XmlBlade\LaravelHtmx\Services;

class Menu
{
    protected array $items = [];

    protected string $position = 'bottom-end';

    protected string $view = 'htmx::components.menu.index';

    public function item(string|MenuItem $item): self
    {

        if (is_string($item)) {
            $item = new MenuItem(label: $item);
        }

        $this->items[] = $item;

        return $this;
    }

    public function position(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function __toString(): string
    {

        $items = $this->getItems();

        return view($this->view, [
            'items' => $items,
        ])->render();
    }
}
