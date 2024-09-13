<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('18013900');

print_r($resultado);