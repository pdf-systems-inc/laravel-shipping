<?php

namespace Pdfsystems\PdfShipping;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pdfsystems\PdfShipping\Commands\PdfShippingCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_pdf-shipping_table')
            ->hasCommand(PdfShippingCommand::class);
    }
}
