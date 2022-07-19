
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Package for interfacing with PDF's shipping integration platform

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pdf-systems-inc/pdf-shipping.svg?style=flat-square)](https://packagist.org/packages/pdf-systems-inc/pdf-shipping)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/pdf-systems-inc/pdf-shipping/run-tests?label=tests)](https://github.com/pdf-systems-inc/pdf-shipping/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/pdf-systems-inc/pdf-shipping/Check%20&%20fix%20styling?label=code%20style)](https://github.com/pdf-systems-inc/pdf-shipping/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pdf-systems-inc/pdf-shipping.svg?style=flat-square)](https://packagist.org/packages/pdf-systems-inc/pdf-shipping)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/pdf-shipping.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/pdf-shipping)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require pdf-systems-inc/pdf-shipping
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="pdf-shipping-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="pdf-shipping-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="pdf-shipping-views"
```

## Usage

```php
$pdfShipping = new Pdfsystems\PdfShipping();
echo $pdfShipping->echoPhrase('Hello, Pdfsystems!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/pdf-systems-inc/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rob Pungello](https://github.com/pdf-systems-inc)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
