<?php

namespace App\Entity;

class Endereco {
    
    /**
     * Tipo de logradouro
     * @var \App\Entity\Logradouros\LogradourosInterface 
     */
    private $logradouro;
    
    /**
     * nome do endereço (nome da rua)
     * @var string
     */
    private $endereco;
    
    /**
     * Numero do endereço
     * @var integer
     */
    private $numero;
    
    /**
     * CEP do endereço
     * @var integer
     */
    private $cep;
    
    /**
     * Bairro do endereço (para obter cidade e estado usa-se a navegacao de objetos - vide testes)
     * @var \App\Entity\Bairro
     */
    private $bairro;
   
    
    function getLogradouro() {
        return $this->logradouro;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCep() {
        return $this->cep;
    }

    function getBairro() {
        return $this->bairro;
    }


    function setLogradouro(\App\Entity\Logradouros\LogradouroInterface $logradouro) {
        $this->logradouro = $logradouro;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setNumero($numero) {
        $this->numero = (int) $numero;
    }

    function setCep($cep) {
        $this->cep = (int) $cep;
    }

    function setBairro(\App\Entity\Bairro $bairro) {
        $this->bairro = $bairro;
    }
    
    function __construct(\App\Entity\Logradouros\LogradourosInterface $logradouro, $endereco, $numero, $cep, \App\Entity\Bairro $bairro) {
        $this->logradouro = $logradouro;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->cep = $cep;
        $this->bairro = $bairro;
    }
    
    public function __toString() {
        $endereco = $this->getLogradouro()->getLogradouro();
        $endereco .= " {$this->getEndereco()}, {$this->getNumero()} - {$this->getBairro()->getBairro()}";
        $cidade = $this->getBairro()->getCidade()->getCidade();
        $estado = $this->getBairro()->getCidade()->getEstado()->getEstado();
        $uf = $this->getBairro()->getCidade()->getEstado()->getUf();
        $endereco .= " - {$cidade} / {$estado} - {$uf} - CEP.: {$this->getCep()}";
        
        return $endereco;
    }

}
