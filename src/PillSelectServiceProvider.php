<?php

namespace SolutionForest\PillSelect;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Features\SupportTesting\Testable;
use SolutionForest\PillSelect\Testing\TestsPillSelect;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PillSelectServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-pill-select';

    public static string $viewNamespace = 'filament-pill-select';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
        ->hasViews(static::$viewNamespace);
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        // Testing
        Testable::mixin(new TestsPillSelect());
    }
    
    protected function getAssetPackageName(): ?string
    {
        return 'solution-forest/filament-pill-select';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('pill-select-styles', __DIR__.'/../resources/dist/filament-pill-select.css'),
        ];
    }
}
