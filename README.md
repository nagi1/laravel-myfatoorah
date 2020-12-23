# My Fatoorah integration with Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nagi1/laravel-myfatoorah.svg?style=flat-square)](https://packagist.org/packages/nagi1/laravel-myfatoorah)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/nagi1/laravel-myfatoorah/run-tests?label=tests)](https://github.com/nagi1/laravel-myfatoorah/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/nagi1/laravel-myfatoorah.svg?style=flat-square)](https://packagist.org/packages/nagi1/laravel-myfatoorah)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require nagi1/laravel-myfatoorah
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Nagi1\MyFatoorah\MyFatoorahServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Nagi1\MyFatoorah\MyFatoorahServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-myfatoorah = new Nagi1\MyFatoorah();
echo $laravel-myfatoorah->echoPhrase('Hello, Nagi1!');
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

- [Ahmed Nagi](https://github.com/nagi1)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
