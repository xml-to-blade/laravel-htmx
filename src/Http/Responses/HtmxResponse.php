<?php

namespace XmlBlade\LaravelHtmx\Http\Responses;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Request;
use XmlBlade\LaravelHtmx\Concerns;
use XmlBlade\LaravelHtmx\Utils;

class HtmxResponse extends Response
{
    use Concerns\HasLocationResponse;
    use Concerns\SupportsModals;
    use Concerns\SupportsOutOfBand;
    use Concerns\SupportsRedirectHeader;
    use Concerns\SupportsReswapHeader;
    use Concerns\SupportsRetargetHeader;
    use Concerns\SupportsToasts;
    use Concerns\SupportsTriggers;

    //
    public function prepare(Request $request): static
    {
        $this->appendTriggers();

        $content = $this->getContent();

        $content .= $this->getOutOfBandAsString();

        $this->setContent($content);

        $this->appendHeaders();

        return parent::prepare($request);
    }

    private function appendHeaders(): void
    {
        //
    }

    private function appendTriggers(): void
    {
        if (count($this->triggers)) {
            $this->headers->set('HX-Trigger', $this->encodeTriggers($this->triggers));
        }

        if (count($this->triggersAfterSettle)) {
            $this->headers->set('HX-Trigger-After-Settle', $this->encodeTriggers($this->triggersAfterSettle));
        }

        if (count($this->triggersAfterSwap)) {
            $this->headers->set('HX-Trigger-After-Swap', $this->encodeTriggers($this->triggersAfterSwap));
        }
    }

    private function encodeTriggers(array $triggers): string
    {
        if (Utils::containsANonNullableElement($triggers)) {
            return json_encode($triggers);
        }

        return implode(',', array_keys($triggers));
    }
}
