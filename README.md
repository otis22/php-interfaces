![GitHub CI](https://github.com/otis22/php-interfaces/workflows/CI/badge.svg)

# php-interfaces

php interfaces for OOP projects 

## Installation

```
composer require otis22/php-interfaces
```

## KeyValue Interface

Interface for objects which can be convert to simple assoc array key => value

```php
<?php

declare(strict_types=1);

use Otis22\PhpInterfaces\KeyValue;

final class FakeLoginCredentials implements KeyValue
{
    public function asKeyValue(): array
    {
        return [
            'login' => 'test'
        ];
    }
}
```
