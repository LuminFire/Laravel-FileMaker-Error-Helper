This is a service provider for Laravel/Lumen to help look up FileMaker Pro error codes.

# Installation

Run `composer require luminfire/laravel-fmerrorhelper`

## Lumen

Add this line to `bootstrap/app.php` to register the service provider:

```php
$app->register(LuminFire\LaravelFmErrorHelper\LaravelFmErrorHelperServiceProvider::class);
```

# Usage

Method 1: Use the namespaced function:

```php
LuminFire\LaravelFmErrorHelper\Helper::getErrorCode($fmCode, $fallback);
```

Method 2:

Include the namespace at the top of the file:

```php
use LuminFire\LaravelFmErrorHelper\Helper;
```

Then call the `getErrorCode`/`getErrorMessage` function:
```php
Helper::getErrorCode($fmCode, $fallback);
```
