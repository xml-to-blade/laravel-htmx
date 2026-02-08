<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils;

trait HasTitle
{
    public function title(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
