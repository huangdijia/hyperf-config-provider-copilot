
# This is my package hyperf-config-provider-copilot

[![Latest Version on Packagist](https://img.shields.io/packagist/v/huangdijia/hyperf-config-provider-copilot.svg?style=flat-square)](https://packagist.org/packages/huangdijia/hyperf-config-provider-copilot)
[![Tests](https://github.com/huangdijia/hyperf-config-provider-copilot/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/huangdijia/hyperf-config-provider-copilot/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/huangdijia/hyperf-config-provider-copilot.svg?style=flat-square)](https://packagist.org/packages/huangdijia/hyperf-config-provider-copilot)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/hyperf-config-provider-copilot.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/hyperf-config-provider-copilot)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require huangdijia/hyperf-config-provider-copilot
```

## Usage

```php
class ConfigProvider
{
    use Huangdijia\HyperfConfigProviderCopilot\ConfigProviderCopilot;

    public function process()
    {
        $this->addScanPath(__DIR__);
        $this->addListener(/**/);
    }
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Deeka Wong](https://github.com/huangdijia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
