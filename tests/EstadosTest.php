<?php

use App\Entity\Estado;
use App\Entity\Cidade;
use App\Listas\Cidade as CidadeLista;

class EstadosTest extends PHPUnit_Framework_TestCase{
   
    
    public function setUp() {
        parent::setUp();
    }
    
    public function testUfEstado(){
        $e = new Estado('Rio de Janeiro','RJ');
        $e->addCidade(new Cidade('Rio de Janeiro',$e));
        $e->addCidade(new Cidade('Cabo Frio',$e));
        $e->addCidade(new Cidade('Rio das Ostras',$e));
        $this->assertCount(3, $e->getCidades());
    }
    public function testListaCidadeDoEstadoCount(){
       
        $e = new Estado('Rio de Janeiro','RJ');
        $this->assertEquals('RJ', $e->getUf());
    }
    public function testGetEstadoCidade(){
       
        $e = new Estado('Rio de Janeiro','RJ');
        $e->addCidade(new Cidade('Rio de Janeiro',$e));
        $e->addCidade(new Cidade('Cabo Frio',$e));
        $e->addCidade(new Cidade('Rio das Ostras',$e));
        
        $this->assertInstanceOf('App\Entity\Estado', $e->getCidades()->offSetGet(1)->getEstado());
    }
    
    public function tearDown() {
        parent::tearDown();
    }
}
