<?php

namespace Pdfsystems\PdfShipping;

use Carbon\Carbon;
use Spatie\DataTransferObject\Caster;

class CarbonCaster implements Caster
{
    public function cast(mixed $value): ?Carbon
    {
        if (empty($value)) {
            return null;
        } else {
            return Carbon::parse($value);
        }
    }
}
