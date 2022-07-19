<?php

namespace Pdfsystems\PdfShipping\Commands;

use Illuminate\Console\Command;

class PdfShippingCommand extends Command
{
    public $signature = 'pdf-shipping';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
