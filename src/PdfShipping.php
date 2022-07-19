<?php

namespace Pdfsystems\PdfShipping;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Pdfsystems\PdfShipping\Dtos\OrderDto;
use Pdfsystems\PdfShipping\Dtos\ShipmentResultDto;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class PdfShipping
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('pdf-shipping.url'),
            'headers' => $this->getHeaders(),
        ]);
    }

    /**
     * @throws UnknownProperties
     * @throws GuzzleException
     */
    public function createOrder(string $tenant, OrderDto|Shippable $order): OrderDto
    {
        if ($order instanceof Shippable) {
            $order = $order->convertToOrderDto();
        }

        $response = $this->client->post('/'.$tenant.'/api/order', [
            'json' => $order->toArray(),
        ]);

        return new OrderDto(
            json_decode($response->getBody()->getContents(), flags: JSON_OBJECT_AS_ARRAY)
        );
    }

    public function getShipments(string $tenant, int $sourceApplication = null, int $lastId = 0): ShipmentResultDto
    {
        $response = $this->client->get('/'.$tenant.'/api/tracking', [
            'query' => [
                'id' => $lastId,
                'source' => $sourceApplication,
            ],
        ]);

        $shipments = json_decode($response->getBody()->getContents(), flags: JSON_OBJECT_AS_ARRAY);

        return new ShipmentResultDto(
            count: count($shipments),
            shipments: $shipments
        );
    }

    /**
     * @return string[]
     */
    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer '.config('pdf-shipping.token'),
            'Accept' => 'application/json',
        ];
    }
}
