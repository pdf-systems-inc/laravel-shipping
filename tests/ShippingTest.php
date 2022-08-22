<?php

it('can create shipping client', function () {
    $client = new Pdfsystems\PdfShipping\PdfShipping();

    expect($client)->toBeInstanceOf(\Pdfsystems\PdfShipping\PdfShipping::class);
});
