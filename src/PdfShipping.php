<?php

namespace Pdfsystems\PdfShipping;

use GuzzleHttp\Client;

class PdfShipping
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('pdf-shipping.url'),
            'headers' => $this->getHeaders()
        ]);
    }

    /**
     * @return string[]
     */
    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . config('pdf-shipping.token'),
            'Accept' => 'application/json',
        ];
    }
}
