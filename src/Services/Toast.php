<?php

namespace XmlBlade\LaravelHtmx\Services;

use Illuminate\Support\Facades\Blade;
use XmlBlade\LaravelHtmx\Enums\Variant;

class Toast
{
    public function __construct(
        public string $heading,
        public Variant $variant = Variant::INFO,
    ) {
        //
    }

    public function __toString(): string
    {
        return Blade::render('<x-htmx::toast :$heading :$variant />', [
            'heading' => $this->heading,
            'variant' => $this->variant->value,
        ]);
    }
}
