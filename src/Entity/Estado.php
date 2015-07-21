<?php

namespace App\Entity;
use App\Listas\Cidade as CidadeLista;
class Estado {

    /**
     * Nome do estado
     * @var string
     */
    private $estado;

    /**
     * UF do estado
     * @var string
     */
    private $uf;

    /**
     * lista de cidades
     * @var App\Listas\Cidade
     */
    private $cidades;
    
    function __construct($estado, $uf) {        
        $this->setEstado($estado);
        $this->setUf($uf);
        $this->setCidades(new CidadeLista());
    }

        function getUf() {
        return $this->uf;
    }

    function getCidades() {
        return $this->cidades;
    }

    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    /**
     * Seta uma lista de cidades
     * @param \App\Entity\App\Listas\Cidade $cidades
     */
    function setCidades(\App\Listas\Cidade $cidades) {
        $this->cidades = $cidades;
    }
    
    /**
     * Adiciona uma cidade a lista
     * @param \App\Entity\App\Entity\Cidade $cidade
     */
    function addCidade(\App\Entity\Cidade $cidade) {
        $cidade->setEstado($this);
        $this->cidades->add($cidade);
    }

}
