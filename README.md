This is a service provider for Laravel/Lumen to convert FileMaker Pro error codes to standard HTTP status codes and messages.

# Installation

Run `composer require brilliantpackages/laravel-fmerrorhelper`.

## Lumen

Add this line to `bootstrap/app.php` to register the service provider:

```php
$app->register(BrilliantPackages\LaravelFmErrorHelper\LaravelFmErrorHelperServiceProvider::class);
```

# Usage

This package should auto-register itself and the `FMError` facade for use.

Method 1: Use the facade:

```php
FMError::getErrorCode($fmCode, $fallback);
```

Method 2:

Include the namespace at the top of the file:

```php
use BrilliantPackages\LaravelFmErrorHelper\Helper as FMError;

# Use the getErrorCode/getErrorMessage function as needed:
$code = FMError::getErrorCode($fmCode, $fallback);
$message = FMError::getErrorMessage($fmCode, $fallback);
```
