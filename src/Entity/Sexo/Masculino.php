<?php

namespace App\Entity\Sexo;
use App\Entity\Sexo\SexoInterface;

class Masculino implements SexoInterface{
    
    private $sexo;
    
    public function __construct() {
        $this->sexo = 'Masculino';
    }
    
    public function getSexo() {
        return $this->sexo;
    }
}
