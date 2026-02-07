# Laravel HTMX

Services and components to quickly scaffold dynamic Laravel apps with the power of HTMX.

> This package expects you to be familiar with [HTMX](https://htmx.org). Please read the documentation before using this.

## Responses

### HtmxResponse

```php
<?php

namespace App\Http\Controllers;

use XmlBlade\LaravelHtmx\Enums\Variant;
use XmlBlade\LaravelHtmx\Services\Toast;
use XmlBlade\LaravelHtmx\Http\Responses\HtmxResponse;

class ToastController
{
    public function success(): HtmxResponse
    {
        return (new HtmxResponse)
            ->toast(new Toast(
                heading: 'Success Notification',
                variant: Variant::SUCCESS
            ));
    }
}

```

### ModalResponse

```php
<?php

namespace App\Http\Controllers;

use XmlBlade\LaravelHtmx\Enums\Variant;
use XmlBlade\LaravelHtmx\Services\Toast;
use XmlBlade\LaravelHtmx\Http\Responses\ModalResponse;

class ModalController
{
    public function success(): ModalResponse
    {
        return (new ModalResponse('modal HTML'));
    }
}
```

## Components

### Toast

### Modal
