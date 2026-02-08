<?php

namespace XmlBlade\LaravelHtmx\Services;

use XmlBlade\LaravelHtmx\Concerns\IsBuilderObject;

class Menu
{
    use IsBuilderObject;

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

    public function toArray(): array
    {
        return [
            'items' => $this->getItems(),
        ];
    }
}
