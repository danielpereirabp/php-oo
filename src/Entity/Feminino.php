<?php

namespace App\Entity;
use App\Entity\Interfaces\Sexo;

class Feminino implements Sexo{
    
    private $sexo;
    
    public function __construct() {
        $this->sexo = 'Feminino';
    }
    
    public function getSexo() {
        return $this->sexo;
    }
}
