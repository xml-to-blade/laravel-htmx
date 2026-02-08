<?php

namespace XmlBlade\LaravelHtmx\Services\Fields;

use XmlBlade\LaravelHtmx\Concerns\Utils\HasOptions;

class Select extends Field
{
    use HasOptions;

    protected array $options = [];

    protected string $view = 'htmx::components.form.field.select';

    public function toArray(): array
    {
        return [
            ...parent::toArray(),
            'options' => $this->getOptions(),
        ];
    }
}
