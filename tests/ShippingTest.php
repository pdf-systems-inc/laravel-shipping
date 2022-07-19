<?php

it('can create shipping client', function () {
    $client = new Pdfsystems\PdfShipping\PdfShipping();

    ray($client->getShipments('woven'));

    expect($client)->toBeInstanceOf(\Pdfsystems\PdfShipping\PdfShipping::class);
});
