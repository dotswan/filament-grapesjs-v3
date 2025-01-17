<?php

declare(strict_types=1);

namespace Dotswan\FilamentGrapesjs;

use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Asset;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Assets\AlpineComponent;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

class FilamentGrapesJsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-grapesjs';

    public static string $viewNamespace = 'filament-grapesjs';

    public function configurePackage(Package $package): void
    {

        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasConfigFile()
            ->hasInstallCommand(function (InstallCommand $command): void {
                $command
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('dotswan/filament-grapesjs-v3');
            });

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );
    }

    protected function getAssetPackageName(): ?string
    {
        return 'dotswan/filament-grapesjs-v3';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        $files = [
            // AlpineComponent::make('filament-grapesjs', __DIR__.'/../resources/dist/components/filament-grapesjs.js'),

            Css::make('grapesjs', __DIR__.'/../resources/dist/css/grapes.min.css'),
            Css::make('filament-grapesjs', __DIR__.'/../resources/dist/css/filament-grapesjs.css'),

            Js::make('grapesjs', __DIR__.'/../resources/dist/js/grapes.min.js'),
            Js::make('filament-grapesjs-tailwindcss', __DIR__.'/../resources/dist/js/grapesjs-tailwind.min.js'),
            Js::make('filament-grapesjs', __DIR__.'/../resources/dist/js/filament-grapesjs.js'),
        ];

        foreach (config( 'filament-grapesjs.assets', [] ) as $type => $assets)
        {
            foreach ($assets as $slug => $path)
            {
                $file = resource_path($path);
                if (!file_exists($file))
                {
                    continue;
                }
                if ($type === 'css')
                {
                    $files[] = Css::make($slug, $file);
                }
                else
                {
                    $files[] = Js::make($slug, $file);
                }
            }
        }

        return $files;
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
        ];
    }
}
