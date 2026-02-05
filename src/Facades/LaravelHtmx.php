<?php

namespace XmlBlade\LaravelHtmx\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \XmlBlade\LaravelHtmx\LaravelHtmx
 */
class LaravelHtmx extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \XmlBlade\LaravelHtmx\LaravelHtmx::class;
    }
}
