<?php

namespace XmlBlade\LaravelHtmx\Concerns;

trait SupportsRetargetHeader
{
    protected ?string $retarget = null;

    public function retarget(?string $target = null): self
    {
        $this->retarget = $target;

        return $this;
    }

    public function getRetarget(): ?string
    {
        return $this->retarget;
    }
}
