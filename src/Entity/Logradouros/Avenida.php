<?php

namespace App\Entity\Logradouros;

class Avenida implements LogradourosInterface {

    private $logradouro;

    public function __construct() {
        $this->logradouro = 'Av.';
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

}
