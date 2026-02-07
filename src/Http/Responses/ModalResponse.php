<?php

namespace XmlBlade\LaravelHtmx\Http\Responses;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;

class ModalResponse extends HtmxResponse
{
    public function __construct($content = '')
    {
        $name = 'modal_'.Str::random(12);

        $wrapped = Blade::render('<x-htmx::modal :triggerless="true" :$name >{!! $content !!}</x-adminkit::modal>', [
            'name' => $name,
            'content' => $content,
        ]);

        parent::__construct($wrapped);

        $this->retarget('[data-modal-container]');

        $this->openModal($name);
    }
}
