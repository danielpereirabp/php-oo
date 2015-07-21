<?php

namespace App\Listas;

class Bairro extends \ArrayObject{
     public function add(\App\Entity\Bairro $value) {
        parent::append($value);
    }
}
