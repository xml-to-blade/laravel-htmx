<?php

namespace XmlBlade\LaravelHtmx\Concerns;

use XmlBlade\LaravelHtmx\Services\Fields\Field;

trait SupportsFields
{
    protected array $fields = [];

    public function field(Field $field): self
    {
        $this->fields[] = $field;

        return $this;
    }

    public function getFields(): array
    {
        return $this->fields;
    }
}
