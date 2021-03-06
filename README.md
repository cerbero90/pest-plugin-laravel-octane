# ⛽ Laravel Octane (Pest Plugin)

[![Author][ico-author]][link-author]
[![PHP Version][ico-php]][link-php]
[![Laravel Version][ico-laravel]][link-laravel]
[![Octane Compatibility][ico-octane]][link-octane]
[![Build Status][ico-actions]][link-actions]
[![Latest Version][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![PSR-12][ico-psr12]][link-psr12]
[![Total Downloads][ico-downloads]][link-downloads]

Pest plugin to test Laravel applications powered by Octane.


## Install

Via Composer

``` bash
composer require --dev cerbero/pest-plugin-laravel-octane
```

## Usage

Once the plugin is installed you are ready to go! Combine the elegant syntax of [Pest](https://pestphp.com/docs/writing-tests) and [Octane Testbench](https://github.com/cerbero90/octane-testbench#usage):

```php
test('Octane application')
    ->assertOctaneCacheMissing('foo')
    ->assertOctaneTableMissing('example', 'row')
    ->assertOctaneTableCount('example', 0)
    ->expectsConcurrencyResults([1, 2, 3])
    ->get('octane/route')
    ->assertOk()
    ->assertOctaneCacheHas('foo', 'bar')
    ->assertOctaneTableHas('example', 'row.votes', 123)
    ->assertOctaneTableCount('example', 1);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email andrea.marco.sartori@gmail.com instead of using the issue tracker.

## Credits

- [Andrea Marco Sartori][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-author]: https://img.shields.io/static/v1?label=author&message=cerbero90&color=50ABF1&logo=twitter&style=flat-square
[ico-php]: https://img.shields.io/packagist/php-v/cerbero/pest-plugin-laravel-octane?color=%234F5B93&logo=php&style=flat-square
[ico-laravel]: https://img.shields.io/static/v1?label=laravel&message=%E2%89%A58.0&color=ff2d20&logo=laravel&style=flat-square
[ico-octane]: https://img.shields.io/static/v1?label=octane&message=compatible&color=ff2d20&logo=laravel&style=flat-square
[ico-version]: https://img.shields.io/packagist/v/cerbero/pest-plugin-laravel-octane.svg?label=version&style=flat-square
[ico-actions]: https://img.shields.io/github/workflow/status/cerbero90/pest-plugin-laravel-octane/build?style=flat-square&logo=github
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-psr12]: https://img.shields.io/static/v1?label=compliance&message=PSR-12&color=blue&style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cerbero/pest-plugin-laravel-octane.svg?style=flat-square

[link-author]: https://twitter.com/cerbero90
[link-php]: https://www.php.net
[link-laravel]: https://laravel.com
[link-octane]: https://github.com/laravel/octane
[link-packagist]: https://packagist.org/packages/cerbero/pest-plugin-laravel-octane
[link-actions]: https://github.com/cerbero90/pest-plugin-laravel-octane/actions?query=workflow%3Abuild
[link-psr12]: https://www.php-fig.org/psr/psr-12/
[link-downloads]: https://packagist.org/packages/cerbero/pest-plugin-laravel-octane
[link-contributors]: ../../contributors
