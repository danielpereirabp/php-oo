<?php
require '../vendor/autoload.php';
 use App\Entity\Cliente;
 use App\Entity\Sexo;
 use App\Entity\Estado;
 use App\Entity\Bairro;
 use App\Entity\Cidade;
 use App\Entity\Endereco;
 use App\Entity\Logradouro;
 use App\Entity\Masculino;
 use App\Entity\Feminino;
 use \DateTime;
 
 $rj = new Estado('Rio de Janeiro','RJ');
 $sp = new Estado('São Paulo','SP');
 $mg = new Estado('Minas Gerais','MG');
 
 $bocasp = new Cidade('Bocaiuva', $sp);
 $araribe = new Cidade('Araribe', $rj);
 $formiga = new Cidade('Formiga', $mg);
 
 $praia = new Bairro('Praia do forte', $araribe);
 $cacaroto = new Bairro('Praia do cacaroto', $bocasp);
 $rainha = new Bairro('Ponto da rainha', $formiga);
 
 $sexo = [new Masculino(), new Feminino()];
 $bairros = [$praia, $cacaroto, $rainha];
 
	$clientes = [
		new Cliente('Jimi Hendrix', '123.456.789-00', new DateTime(implode('-',array_reverse(explode('/','27/11/1942')))), $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Brian Johnson', '001.002.003.45', new DateTime(implode('-',array_reverse(explode('/','05/10/1947')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Bon Scott', '111.222.333-44', new DateTime(implode('-',array_reverse(explode('/','09/07/1946')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Bruce Dickinson', '100.200.300-40', new DateTime(implode('-',array_reverse(explode('/','07/08/1958')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Ian Gillan', '123.456.789-00', new DateTime(implode('-',array_reverse(explode('/','19/08/1945')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Robert Plant', '123.456.789-00', new DateTime(implode('-',array_reverse(explode('/','20/08/1948')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Ozzy Osbourne', '123.456.789-00', new DateTime(implode('-',array_reverse(explode('/','03/12/1948')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Ronnie James Dio', '123.456.789-00', new DateTime(implode('-',array_reverse(explode('/','10/07/1942')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Dave Mustaine', '123.456.789-00', new DateTime(implode('-',array_reverse(explode('/','13/09/1961')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
		new Cliente('Phil Anselmo', '123.456.789-00', new DateTime(implode('-',array_reverse(explode('/','30/06/1968')))),  $sexo[rand(0,1)], new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)])),
	];
        
        $cliente = $clientes[3];
        $cliente->addEndereco(new Endereco(new Logradouro('Rua'),'Qualquer',rand(0,1000),rand(10000000,99999999),$bairros[rand(0,2)]));
        