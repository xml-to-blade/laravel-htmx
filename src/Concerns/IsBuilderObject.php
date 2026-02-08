<?php

namespace XmlBlade\LaravelHtmx\Concerns;

use XmlBlade\LaravelHtmx\Concerns\Utils\HasView;

trait IsBuilderObject
{
    use HasView;

    public function __toString(): string
    {
        return view($this->getView(), $this->toArray())
            ->render();
    }
}
