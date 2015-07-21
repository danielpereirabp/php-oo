<?php

namespace App\Entity;

class Logradouro {
   
    /**
     * nome do logradouro
     * @var string
     */
    private $logradouro;
    
    function getLogradouro() {
        return $this->logradouro;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }
    
    function __construct($logradouro) {
        $this->logradouro = $logradouro;
    }

}
