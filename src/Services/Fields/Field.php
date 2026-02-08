<?php

namespace XmlBlade\LaravelHtmx\Services\Fields;

use XmlBlade\LaravelHtmx\Concerns\IsBuilderObject;
use XmlBlade\LaravelHtmx\Concerns\Utils;

class Field
{
    use IsBuilderObject;
    use Utils\HasDescription;
    use Utils\HasHelperText;
    use Utils\HasLabel;

    protected string $view = 'htmx::components.form.field.group';

    public function __construct(
        protected string $name,
        protected ?string $label = null,
        protected ?string $description = null,
        protected ?string $help = null,
    ) {
        //
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'label' => $this->getLabel(),
            'description' => $this->getDescription(),
            'help' => $this->getHelperText(),
        ];
    }
}
