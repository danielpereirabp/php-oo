<?php

use App\Entity\Estado;
use App\Entity\Cidade;
use App\Entity\Bairro;
use App\Listas\Cidade as CidadeLista;
use App\Listas\Bairro as BairroLista;

class CidadeTest extends PHPUnit_Framework_TestCase{
   
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testUfEstado(){
        $e = new Estado('Rio de Janeiro','RJ');
        $e->addCidade(new Cidade('Rio de Janeiro',$e));
        $this->assertEquals('RJ',$e->getCidades()->offSetGet(0)->getEstado()->getUf());
    }
    
    public function testCidadeAddBairro(){
        $e = new Estado('Rio de Janeiro','RJ');
        $e->addCidade(new Cidade('Rio de Janeiro',$e));
        $cidade = $e->getCidades()->offSetGet(0);
        $cidade->addBairro(new Bairro('Barra da Tijuca', $cidade));
        $cidade->addBairro(new Bairro('Jacarepaguá', $cidade));
        $cidade->addBairro(new Bairro('Copacabana', $cidade));
        $this->assertCount(3,$cidade->getBairros());
    }
    
    public function testGetUfDoEstadoPeloBairro(){
        $e = new Estado('Rio de Janeiro','RJ');
        $e->addCidade(new Cidade('Rio de Janeiro',$e));
        $cidade = $e->getCidades()->offSetGet(0);
        $cidade->addBairro(new Bairro('Barra da Tijuca', $cidade));
        $bairro = $cidade->getBairros()->offSetGet(0);
        $this->assertEquals('RJ',$bairro->getCidade()->getEstado()->getUf());
    }
    
    public function tearDown() {
        parent::tearDown();
    }
}
