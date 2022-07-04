# just-hello

Just say what you type.

# Installation
This project using composer.

```
$ composer require tekirara/just-hello
```

# Usage
```php
require_once('src/Hello.php');

use Tekirara\JustHello\Hello;

$someone = new Hello();

$someone->say("What a beautiful world.");
```