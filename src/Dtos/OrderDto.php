<?php

namespace Pdfsystems\PdfShipping\Dtos;

use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class OrderDto extends DataTransferObject
{
    const ORDER_TYPE_SALES = 1;
    const ORDER_TYPE_SAMPLE = 2;

    public ?int $id;
    public int $source_application;
    public int $order_type = OrderDto::ORDER_TYPE_SALES;
    public string $order_id;
    public string $order_number;
    public ?string $customer_name;
    public ?string $customer_number;
    public ?string $sales_rep_name;
    public ?string $sales_rep_code;
    public ?string $sidemark;
    public ?string $comment;
    public ?float $weight = 0.0;
    public ?int $weight_integer = 0;
    public ?float $insured_value = 0.0;
    public ?float $order_total = 0.0;
    public ?float $order_cost = 0.0;
    public string $ship_to_name;
    public ?string $ship_to_attention;
    public string $ship_to_street;
    public ?string $ship_to_street2;
    public ?string $ship_to_city;
    public ?string $ship_to_state;
    public ?string $ship_to_state_code;
    public ?string $ship_to_postal_code;
    public ?string $ship_to_country;
    public ?string $ship_to_country_code;
    public ?string $ship_to_email;
    public ?string $ship_to_phone;
    public ?string $shipper_number;
    public ?string $shipping_method;
    public ?string $shipping_method_code;

    /**
     * @throws UnknownProperties
     */
    public function __construct(...$args)
    {
        if (is_array($args[0] ?? null)) {
            $args = $args[0];
        }

        $args['source_application'] = config('pdf-shipping.application_id');
        parent::__construct($args);
    }
}
