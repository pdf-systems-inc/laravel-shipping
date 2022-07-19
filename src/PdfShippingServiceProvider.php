<?php

namespace Pdfsystems\PdfShipping;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PdfShippingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pdf-shipping')
            ->hasConfigFile();

        $this->app->singleton('pdf-shipping', function () {
            return new PdfShipping();
        });
    }
}
