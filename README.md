This is a service provider for Laravel/Lumen to help look up FileMaker Pro error codes.

# Installation

Add this to your `composer.json`:

```json
    "repositories": [
        {
            "type": "vcs",
            "url": "git@git.luminfire.net:products/brilliant-gateway/laravel-fm-error-helper.git"
        }
    ],
```

Add this line to the `require` object in your `composer.json`:

```json
    "luminfire/laravel-fmerrorhelper": "^1.0"
```

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
