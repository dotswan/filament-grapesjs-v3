# Filament Grapesjs V3

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]][link-license]


![image](https://github.com/dotswan/filament-grapesjs-v3/assets/20874565/2ad36e55-4d56-42f6-8946-b894dab5d4fa)


## Introduction 

This package extends Filament to include a field type called Grapesjs, leveraging the Grapesjs library to enable visual editing of HTML codes within the Filament components. It allows users to interactively design and incorporate HTML elements via drag-and-drop functionality.


* Features include: 
   * Integration of the Grapesjs library into Filament components.
   * Drag-and-drop functionality for visually designing HTML elements.
   * Simplified HTML code editing within Filament.
* Latest versions of PHP and Filament
* Best practices applied:
  * [`README.md`][link-readme] (badges included)
  * [`LICENSE`][link-license]
  * [`composer.json`][link-composer-json]
  * [`.gitignore`][link-gitignore]
  * [`pint.json`][link-pint]

## Installation

You can easily install the package via Composer:

```bash
composer require venuesight/filament-grapesjs-v3
```

## Basic Usage

Resource file:

```php
<?php
namespace App\Filament\Resources;
use Filament\Resources\Resource;
use Filament\Resources\Forms\Form;
use Dotswan\FilamentGrapesjs\Fields\GrapesJs;
...

class FilamentResource extends Resource
{
    ...
    public static function form(Form $form)
    {
        return $form->schema([
            GrapesJs::make('page_layout')
                ->id('page_layout'),
           ]);
    }
    ...
}
```

## License

[MIT License](LICENSE.md) © Dotswan

## Security

We take security seriously. If you discover any bugs or security issues, please help us maintain a secure project by reporting them through our [`GitHub issue tracker`][link-github-issue]. You can also contact us directly at [tech@dotswan.com](mailto:tech@dotswan.com).

## Contribution

We welcome contributions! contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement". Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


[ico-version]: https://img.shields.io/packagist/v/dotswan/filament-grapesjs-v3.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dotswan/filament-grapesjs-v3.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/dotswan/filament-grapesjs-v3
[link-license]: https://github.com/dotswan/filament-grapesjs-v3/blob/master/LICENSE.md
[link-downloads]: https://packagist.org/packages/dotswan/filament-grapesjs-v3
[link-readme]: https://github.com/dotswan/filament-grapesjs-v3/blob/master/README.md
[link-github-issue]: https://github.com/dotswan/filament-grapesjs-v3/issues
[link-composer-json]: https://github.com/dotswan/filament-grapesjs-v3/blob/master/composer.json
[link-gitignore]: https://github.com/dotswan/filament-grapesjs-v3/blob/master/.gitignore
[link-pint]: https://github.com/dotswan/filament-grapesjs-v3/blob/master/pint.json
[link-author]: https://github.com/dotswan
