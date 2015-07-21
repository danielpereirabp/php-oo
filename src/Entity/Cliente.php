<?php
namespace App\Entity;
use \DateTime;
use App\Listas\Endereco as EnderecoLista;
use App\Entity\Interfaces\Sexo;
class Cliente {

    private $nome;
    private $cpf;
    private $dataNascimento;
    private $sexo;
    private $endereco;

    public function __construct($nome, $cpf, DateTime $dataNascimento,Sexo $sexo, Endereco $endereco) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->sexo = $sexo;
        $this->endereco = new EnderecoLista();
        $this->endereco->add($endereco);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getSexo() {
        return $this->sexo->getSexo();
    }

    public function getEndereco() {
        return $this->endereco;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setDataNascimento(DateTime $dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEndereco(\App\Listas\Endereco $endereco) {
        $this->endereco = $endereco;
    }
    function addEndereco(\App\Entity\Endereco $endereco) {
        $this->endereco->add($endereco);
    }



}
