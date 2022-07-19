<?php

namespace Pdfsystems\PdfShipping\Dtos;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\DataTransferObject;

class ShipmentResultDto extends DataTransferObject
{
    public int $count = 0;

    #[CastWith(ArrayCaster::class, itemType: ShipmentDto::class)]
    public array $shipments;
}
