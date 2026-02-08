<?php

namespace XmlBlade\LaravelHtmx\Services;

use XmlBlade\LaravelHtmx\Concerns\IsBuilderObject;
use XmlBlade\LaravelHtmx\Concerns\Utils;
use XmlBlade\LaravelHtmx\Enums\RequestType;

class Action
{
    use IsBuilderObject;
    use Utils\Actions\HasSelect;
    use Utils\Actions\HasSelectOob;
    use Utils\Actions\HasSwap;
    use Utils\Actions\HasSwapOob;
    use Utils\Actions\HasTarget;
    use Utils\Actions\HasTrigger;
    use Utils\Actions\SupportsConfirmation;
    use Utils\Actions\SupportsPrompt;
    use Utils\HasDescription;
    use Utils\HasTitle;

    protected string $view = 'htmx::components.action.index';

    public function __construct(
        protected string $title = 'Action',
        protected RequestType $request = RequestType::GET,
        protected ?string $select = null,
        protected ?string $target = null,
        protected ?string $trigger = null,
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
