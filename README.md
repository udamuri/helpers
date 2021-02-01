# Laravel Helper for Laravel 6++

> Easily generate helpers.


## Installation

Require this package in your `composer.json` or install it by running:

```
composer require udamuri/helpers
```

## Basic Usage
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Udamuri\Helpers\Terbilang;

class TesController extends Controller
{
    public function index() {
        echo Terbilang::terbilang(1000);
    }
}
```

## License

Laravel helpers is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
