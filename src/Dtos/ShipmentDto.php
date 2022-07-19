<?php

namespace Pdfsystems\PdfShipping\Dtos;

use Carbon\Carbon;
use Pdfsystems\PdfShipping\CarbonCaster;
use Spatie\DataTransferObject\Attributes\DefaultCast;
use Spatie\DataTransferObject\DataTransferObject;

#[
    DefaultCast(Carbon::class, CarbonCaster::class)
]
class ShipmentDto extends DataTransferObject
{
    public int $id;

    public int $order_id;

    public string $tracking_number;

    public ?string $customer_reference;

    public ?Carbon $date_shipped;

    public ?Carbon $estimated_delivery_date;

    public ?float $weight;

    public ?float $shipping_charges;
}
