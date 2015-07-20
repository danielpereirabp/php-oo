<?php

class Cliente
{
	private $nome;
	private $cpf;
	private $dataNascimento;
	private $sexo;
	private $endereco;

	public function __construct($nome, $cpf, $dataNascimento, $sexo, $endereco)
	{
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->dataNascimento = $dataNascimento;
		$this->sexo = $sexo;
		$this->endereco = $endereco;
	}

	public function getNome()
    {
        return $this->nome;
    }

	public function getCpf()
    {
        return $this->cpf;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}