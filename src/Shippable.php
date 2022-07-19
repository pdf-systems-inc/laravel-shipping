<?php

namespace Pdfsystems\PdfShipping;

use Pdfsystems\PdfShipping\Dtos\OrderDto;

interface Shippable
{
    public function convertToOrderDto(): OrderDto;
}
