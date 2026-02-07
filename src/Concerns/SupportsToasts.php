<?php

namespace XmlBlade\LaravelHtmx\Concerns;

use XmlBlade\LaravelHtmx\Enums\Variant;
use XmlBlade\LaravelHtmx\Services\Toast;

trait SupportsToasts
{
    public function toast(Toast $toast): self
    {
        return $this->addTrigger('toastNotify', $toast->__toString());
    }

    public function successToast(?Toast $toast = null, ?string $text = null): static
    {

        if (! $toast) {
            $toast = new Toast(text: $text ?? 'Operation successful');
        }

        // Ensure the variant is set to success
        $toast->variant = Variant::SUCCESS;

        return $this->toast($toast);
    }

    public function warningToast(?Toast $toast = null, ?string $text = null): static
    {

        if (! $toast) {
            $toast = new Toast(text: $text ?? 'Operation pending');
        }

        // Ensure the variant is set to warning
        $toast->variant = Variant::WARNING;

        return $this->toast($toast);
    }

    public function infoToast(?Toast $toast = null, ?string $text = null): static
    {

        if (! $toast) {
            $toast = new Toast(text: $text ?? 'Operation info');
        }

        // Ensure the variant is set to info
        $toast->variant = Variant::INFO;

        return $this->toast($toast);
    }

    public function errorToast(?Toast $toast = null, ?string $text = null): static
    {

        if (! $toast) {
            $toast = new Toast(text: $text ?? 'Operation failed');
        }

        // Ensure the variant is set to error
        $toast->variant = Variant::DANGER;

        return $this->toast($toast);
    }
}
