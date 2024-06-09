# Generate Filament Model and Resource Dynamically

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hanzoalpha/filament-resources-generator.svg?style=flat-square)](https://packagist.org/packages/hanzoalpha/filament-resources-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hanzoalpha/filament-resources-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hanzoalpha/filament-resources-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hanzoalpha/filament-resources-generator/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hanzoalpha/filament-resources-generator/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hanzoalpha/filament-resources-generator.svg?style=flat-square)](https://packagist.org/packages/hanzoalpha/filament-resources-generator)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require hanzoalpha/filament-resources-generator
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-resources-generator-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-resources-generator-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-resources-generator-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentResourcesGenerator = new HanzoAlpha\FilamentResourcesGenerator();
echo $filamentResourcesGenerator->echoPhrase('Hello, HanzoAlpha!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Hanzo Alpha](https://github.com/hanzo-alpha)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
