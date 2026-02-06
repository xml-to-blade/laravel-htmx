<?php

namespace XmlBlade\LaravelHtmx\Http\Controllers\Responses;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use XmlBlade\LaravelHtmx\Concerns\HasLocationResponse;
use XmlBlade\LaravelHtmx\Concerns\SupportsRedirectHeader;
use XmlBlade\LaravelHtmx\Concerns\SupportsReswapHeader;
use XmlBlade\LaravelHtmx\Concerns\SupportsRetargetHeader;

class HtmxResponse extends Response
{
    use HasLocationResponse;
    use SupportsRedirectHeader;
    use SupportsReswapHeader;
    use SupportsRetargetHeader;

    //
    public function prepare(Request $request): static
    {
        // $this->appendTriggers();

        $content = $this->getContent();

        if (count($this->outOfBand)) {
            $content .= implode('', $this->outOfBand);
        }

        $this->setContent($content);

        return parent::prepare($request);
    }
}
