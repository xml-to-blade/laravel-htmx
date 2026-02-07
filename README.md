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

## Services

### Menu

The `Menu` service is a Builder class that you add a `MenuItem` to.

#### Getting started

To build a Menu, simply instantiate one with the `new` keyword. You can then chain on as many `MenuItem`s as you wish.

```php
<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use XmlBlade\LaravelHtmx\Services\Menu;
use XmlBlade\LaravelHtmx\Services\MenuItem;

Route::get('/', function () {

    $menu = (new Menu)
        ->item(new MenuItem('Menu Item One'))
        ->item(new MenuItem('Menu Item Two', 'academic-cap'));

    return view('test', [
        'menu' => $menu,
    ]);
});

```

#### Nested Menus

Creating nested or sub-menus are trivial, as `MenuItem` simply extends the `Menu` service, allowing you to chain `MenuItem`s to `MenuItem`.

```php
<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use XmlBlade\LaravelHtmx\Services\Menu;
use XmlBlade\LaravelHtmx\Services\MenuItem;

Route::get('/', function () {

    $menu = (new Menu)
        ->item(new MenuItem('Menu Item One'))
        ->item(new MenuItem('Menu Item Two', 'academic-cap'))
        ->item(
            (new MenuItem('Item 3', 'home'))
                ->item('Sub one')
                ->item('Sub two')
        );

    return view('test', [
        'menu' => $menu,
    ]);
});
```


### Form
