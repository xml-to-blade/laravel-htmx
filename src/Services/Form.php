<?php

namespace XmlBlade\LaravelHtmx\Services;

class Form
{
    protected string $view = 'htmx::components.form.index';

    public function __construct(
        protected string $title = 'Form',
        protected ?string $description = null,
    ) {
        //
    }

    public function title(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function description(?string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
    }

    public function __toString(): string
    {
        return view($this->view, $this->toArray())
            ->render();
    }
}
