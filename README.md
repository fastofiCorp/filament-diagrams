# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fastofi-corp/filament-diagrams.svg?style=flat-square)](https://packagist.org/packages/fastofi-corp/filament-diagrams)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fastofi-corp/filament-diagrams/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fastofi-corp/filament-diagrams/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fastofi-corp/filament-diagrams/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fastofi-corp/filament-diagrams/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fastofi-corp/filament-diagrams.svg?style=flat-square)](https://packagist.org/packages/fastofi-corp/filament-diagrams)

## <!--delete-->

This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use this template" button at the top of this repo to create a new repo with the contents of this FilamentDiagrams.
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files.
3. Have fun creating your package.
4. If you need help creating a package, consider picking up our <a href="https://laravelpackage.training">Laravel Package Training</a> video course.

---

<!--/delete-->

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/Filament Diagrams.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/Filament Diagrams)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require fastofi-corp/filament-diagrams
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-diagrams-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-diagrams-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-diagrams-views"
```

## Usage

```php
$variable = new FastofiCorp\FilamentDiagrams();
echo $variable->echoPhrase('Hello, FastofiCorp!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [:author_name](https://github.com/:author_username)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
