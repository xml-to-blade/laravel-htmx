<?php

namespace XmlBlade\LaravelHtmx\Services;

use XmlBlade\LaravelHtmx\Concerns\IsBuilderObject;
use XmlBlade\LaravelHtmx\Concerns\SupportsFields;
use XmlBlade\LaravelHtmx\Concerns\Utils;

class Form
{
    use IsBuilderObject;
    use SupportsFields;
    use Utils\HasDescription;
    use Utils\HasTitle;

    protected string $view = 'htmx::components.form.index';

    public function __construct(
        protected string $title = 'Form',
        protected ?string $description = null,
    ) {
        //
    }

    public function toArray(): array
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'fields' => $this->getFields(),
        ];
    }
}
