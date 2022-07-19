<?php

namespace Pdfsystems\PdfShipping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pdfsystems\PdfShipping\PdfShipping
 */
class PdfShipping extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pdf-shipping';
    }
}
