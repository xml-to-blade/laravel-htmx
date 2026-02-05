<?php

namespace XmlBlade\LaravelHtmx\Commands;

use Illuminate\Console\Command;

class LaravelHtmxCommand extends Command
{
    public $signature = 'laravel-htmx';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
