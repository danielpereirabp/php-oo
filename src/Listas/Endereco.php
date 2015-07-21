<?php

namespace App\Listas;

class Endereco extends \ArrayObject{
     public function add(\App\Entity\Endereco $value) {
        parent::append($value);
    }
}
