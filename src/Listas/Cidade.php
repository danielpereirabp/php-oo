<?php

namespace App\Listas;
class Cidade  extends \ArrayObject{
    public function add(\App\Entity\Cidade $value) {
        parent::append($value);
    }
    
    
}
