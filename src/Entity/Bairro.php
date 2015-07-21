<?php

namespace App\Entity;

class Bairro {
    
    /**
     * nome do bairro
     * @var string
     */
    private $bairro;
    
    /**
     * Cidade a qual o bairro pertence
     * @var App\Entity\Cidade
     */
    private $cidade;
    
    function __construct($bairro, \App\Entity\Cidade $cidade) {
        $this->setBairro($bairro);
        $this->setCidade($cidade);
    }

    
    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade(\App\Entity\Cidade $cidade) {
        $this->cidade = $cidade;
    }
}
