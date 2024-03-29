# This is my package filament-pill-select

[![Latest Version on Packagist](https://img.shields.io/packagist/v/solutionforest/filament-pill-select.svg?style=flat-square)](https://packagist.org/packages/solutionforest/filament-pill-select)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/solutionforest/filament-pill-select/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/solutionforest/filament-pill-select/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/solutionforest/filament-pill-select/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/solutionforest/filament-pill-select/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/solutionforest/filament-pill-select.svg?style=flat-square)](https://packagist.org/packages/solutionforest/filament-pill-select)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require solution-forest/filament-pill-select
```

You can publish the views using

```bash
php artisan vendor:publish --tag="filament-pill-select-views"
```

## Usage

```php

use SolutionForest\PillSelect\PillSelect;

public static function form(Form $form)
{
    return $form
        ->schema([
            PillSelect::make(),
        ]);
}
```

## Testing
```bash
composer test
```

## Changelog

See the [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

See [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

If you discover any security related issues, please email info+package@solutionforest.net instead of using the issue tracker.

## Credits

- [kelseylee](https://github.com/solutionforest)
- [All Contributors](../../contributors)

## License

Filament Tree is open-sourced software licensed under the [MIT license](LICENSE.md).


<p align="center"><a href="https://solutionforest.com" target="_blank"><img src="https://github.com/solutionforest/.github/blob/main/docs/images/sf.png?raw=true" width="200"></a></p>


## About Solution Forest

[Solution Forest](https://solutionforest.com) Web development agency based in Hong Kong. We help customers to solve their problems. We Love Open Soruces. 

We have built a collection of best-in-class products:

- [VantagoAds](https://vantagoads.com): A self manage Ads Server, Simplify Your Advertising Strategy.
- [GatherPro.events](https://gatherpro.events): A Event Photos management tools, Streamline Your Event Photos.
- [Website CMS Management](https://filamentphp.com/plugins/solution-forest-cms-website): Website CMS Management