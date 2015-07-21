<?php

namespace App\Entity;
use \App\Entity\Interfaces\Sexo;

class Masculino implements Sexo{
    
    private $sexo;
    
    public function __construct() {
        $this->sexo = 'Masculino';
    }
    
    public function getSexo() {
        return $this->sexo;
    }
}
