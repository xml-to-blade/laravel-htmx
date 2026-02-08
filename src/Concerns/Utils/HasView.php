<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils;

trait HasView
{
    public function view(string $view): self
    {
        $this->view = $view;

        return $this;
    }

    public function getView(): ?string
    {
        return $this->view;
    }
}
