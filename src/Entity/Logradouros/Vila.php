<?php

namespace App\Entity\Logradouros;

class Vila implements LogradourosInterface {

    private $logradouro;

    public function __construct() {
        $this->logradouro = 'Vl.';
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

}
