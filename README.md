# filament-diagrams: A Diagram Input for FilamentPHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fastofi-corp/filament-diagrams.svg?style=flat-square)](https://packagist.org/packages/fastofi-corp/filament-diagrams)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fastofi-corp/filament-diagrams/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fastofi-corp/filament-diagrams/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fastofi-corp/filament-diagrams/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fastofi-corp/filament-diagrams/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fastofi-corp/filament-diagrams.svg?style=flat-square)](https://packagist.org/packages/fastofi-corp/filament-diagrams)

It's a diagram input type for FilamentPHP using dgrm.js from https://github.com/AlexeyBoiko/DgrmJS

## Installation

You can install the package via composer:

```bash
composer require fastofi-corp/filament-diagrams
```

That's it. Everything else is included once you use the plugin.

## Usage

```php

FilamentDiagrams::make('input-name')


```

Feel free to use all Filament Forms input methods except for height. It's still locked to 500px. Important info: still in development, so use at your own risk, or take your time to improve it.

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

-   [alvleont](https://github.com/alvleont)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
