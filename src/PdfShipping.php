<?php

namespace Pdfsystems\PdfShipping;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Pdfsystems\PdfShipping\Dtos\OrderDto;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

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
     * @throws UnknownProperties
     * @throws GuzzleException
     */
    public function createOrder(string $tenant, OrderDto $order): OrderDto
    {
        $response = $this->client->post('/' . $tenant . '/api/order', [
            'json' => $order->toArray()
        ]);

        return new OrderDto(
            json_decode($response->getBody()->getContents(), flags: JSON_OBJECT_AS_ARRAY)
        );
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
