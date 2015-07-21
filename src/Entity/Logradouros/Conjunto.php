<?php

namespace App\Entity\Logradouros;

class Conjunto implements LogradourosInterface {

    private $logradouro;

    public function __construct() {
        $this->logradouro = 'Cj.';
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

}
