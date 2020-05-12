This is a service provider for Laravel/Lumen to help look up FileMaker Pro error codes.

# Installation

Run `composer require luminfire/laravel-fmerrorhelper`.

## Lumen

Add this line to `bootstrap/app.php` to register the service provider:

```php
$app->register(LuminFire\LaravelFmErrorHelper\LaravelFmErrorHelperServiceProvider::class);
```

# Usage

This package should auto-register itself and the `FMError` alias for use.

Method 1: Use the alias:

```php
FMError::getErrorCode($fmCode, $fallback);
```

Method 2:

Include the namespace at the top of the file:

```php
use LuminFire\LaravelFmErrorHelper\Helper as FMError;

# Use the getErrorCode/getErrorMessage function as needed:
$code = FMError::getErrorCode($fmCode, $fallback);
$message = FMError::getErrorMessage($fmCode, $fallback);
```
