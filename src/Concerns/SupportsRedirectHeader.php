<?php

namespace XmlBlade\LaravelHtmx\Concerns;

trait SupportsRedirectHeader
{
    protected ?string $redirect = null;

    public function redirect(?string $path): self
    {
        $this->redirect = $path;

        $this->headers->set('HX-Redirect', $path);

        return $this;
    }

    public function getRedirect(): ?string
    {
        return $this->redirect;
    }
}
