<?php

namespace App\Entity\Sexo;

class Feminino implements SexoInterface{
    
    private $sexo;
    
    public function __construct() {
        $this->sexo = 'Feminino';
    }
    
    public function getSexo() {
        return $this->sexo;
    }
}
