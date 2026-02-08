<?php

namespace XmlBlade\LaravelHtmx\Services;

use XmlBlade\LaravelHtmx\Concerns\IsBuilderObject;
use XmlBlade\LaravelHtmx\Concerns\Utils;

class Action
{
    use IsBuilderObject;
    use Utils\HasDescription;
    use Utils\HasTitle;

    protected string $view = 'htmx::components.action.index';

    public function __construct(
        protected string $title = 'Action',
        protected ?string $description = null,
    ) {
        //
    }

    public function toArray(): array
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
    }
}
