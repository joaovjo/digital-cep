<?php

namespace App\DigitalCep;

class Search {
    private $url = "https://viacep.com.br/ws/"; //18035002

    public function getAddressFromZipcode(string $zipCode) {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get);
    }
}