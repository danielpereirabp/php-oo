<?php

namespace App\Entity\Logradouros;

class Rua implements LogradourosInterface {

    private $logradouro;

    public function __construct() {
        $this->logradouro = 'Rua';
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

}
