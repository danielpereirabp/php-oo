<?php

namespace App\Entity;
use App\Listas\Bairro as BairroLista;
class Cidade {

    /**
     * nome da cidade
     * @var string
     */
    private $cidade;

    /**
     * Estado a qual a cidade pertence
     * @var App\Entity\Estado 
     */
    private $estado;

    /**
     * Lista de bairros que tem esta cidade
     * @var App\Listas\Bairro
     */
    private $bairros;

    function __construct($cidade, \App\Entity\Estado $estado) {
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setBairros(new BairroLista());
    }

    function getEstado() {
        return $this->estado;
    }

    function setEstado(\App\Entity\Estado $estado) {
        $this->estado = $estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function getBairros() {
        return $this->bairros;
    }

    /**
     * Seta uma lista de bairros
     * @param \App\Entity\App\Listas\Bairro $bairros
     */
    function setBairros(\App\Listas\Bairro $bairros) {
        $this->bairros = $bairros;
    }

    function addBairro(\App\Entity\Bairro $bairro) {
        $bairro->setCidade($this);
        $this->bairros->add($bairro);
    }

}
