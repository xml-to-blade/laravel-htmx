<?php

namespace XmlBlade\LaravelHtmx\Concerns;

trait SupportsTriggers
{
    private array $triggers = [];

    private array $triggersAfterSettle = [];

    private array $triggersAfterSwap = [];

    public function addTrigger(string $key, string|array|null $body = null): static
    {
        $this->triggers[$key] = $body;

        return $this;
    }

    public function addTriggerAfterSettle(string $key, string|array|null $body = null): static
    {
        $this->triggersAfterSettle[$key] = $body;

        return $this;
    }

    public function addTriggerAfterSwap(string $key, string|array|null $body = null): static
    {
        $this->triggersAfterSwap[$key] = $body;

        return $this;
    }
}
