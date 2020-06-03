# Package that provides chilean SII scaffolding for Laravel 7.x

[![Latest Version on Packagist](https://img.shields.io/packagist/v/twgroupcl/chileansii.svg?style=flat-square)](https://packagist.org/packages/twgroupcl/chileansii)
[![Build Status](https://img.shields.io/travis/twgroupcl/chileansii/master.svg?style=flat-square)](https://travis-ci.org/twgroupcl/chileansii)
[![Quality Score](https://img.shields.io/scrutinizer/g/twgroupcl/chileansii.svg?style=flat-square)](https://scrutinizer-ci.com/g/twgroupcl/chileansii)
[![Total Downloads](https://img.shields.io/packagist/dt/twgroupcl/chileansii.svg?style=flat-square)](https://packagist.org/packages/twgroupcl/chileansii)

This package provides migration, seed and models scaffolding for chilean SII activities (tributary categories, etc.)

## Installation

You can install the package via composer:

```bash
composer require twgroupcl/chileansii
```

## Usage

``` php
php artisan vendor:publish --provider="Twgroupcl\Chileansii\ChileansiiServiceProvider"

composer dump-autoload

php artisan migrate

php artisan db:seed --class="ChileanSiiTableSeeder"

```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hola@twgroup.cl instead of using the issue tracker.

## Credits

- [TWGroup](https://github.com/twgroupcl)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.