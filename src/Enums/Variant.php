<?php

namespace XmlBlade\LaravelHtmx\Enums;

enum Variant: string
{
    case DANGER = 'danger';
    case INFO = 'info';
    case SUCCESS = 'success';
    case WARNING = 'warning';

    public function icon(): string
    {
        //
    }
}
