<?php

include_once 'vendor/autoload.php';

use App\SumatraClientFactory;
use App\Type\Kunden_einwilligung_argument;

$client = SumatraClientFactory::factory(
    config('wsdl'),
    config('username'),
    config('password')
);

$argument = (new Kunden_einwilligung_argument())
    ->withBegruendung('John Snow')
    ->withAnrede('Herr')
    ->withEmail('test@example.com');

try {
    $response = $client->kunden_einwilligung($argument);

    print $response->getStatus()->getInformation();

} catch (Exception $exception) {

    print $exception->getMessage();
}
