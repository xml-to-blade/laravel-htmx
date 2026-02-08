<?php

namespace XmlBlade\LaravelHtmx\Concerns\Utils\Actions;

trait SupportsPrompt
{
    protected ?string $prompt = null;

    public function prompt(?string $prompt = null): self
    {
        $this->prompt = $prompt;

        return $this;
    }

    public function getPrompt(): ?string
    {
        return $this->prompt;
    }
}
