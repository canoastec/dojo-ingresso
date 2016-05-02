<?php 
use Dojo\FabricaEstrategiaDesconto;
use Dojo\Pedido;
use Dojo\CadeiraGold;
use Dojo\CadeiraGramado;
use Dojo\SocioGold;
use Dojo\Compra;



class FabricaEstrategiaDescontoTest extends PHPUnit_Framework_TestCase{
	
	public function testDeveRetornarEstrategiaDeDezPorcentoDeDescontoParaCompraComMaisDeUmItem(){

		$pedido = new Pedido();
		$pedido->addItem(new CadeiraGold());
		$pedido->addItem(new CadeiraGramado());
		$comprador = new SocioGold();
		$compra = new Compra($pedido, $comprador);

		$estrategia = FabricaEstrategiaDesconto::criar($compra);

		$this->assertInstanceOf('Dojo\Estrategias\EstrategiaDezPorcento', $estrategia);


	}

	public function testDeveRetornarEstrategiaSemDescontoParaCompraComUmItem(){

		$pedido = new Pedido();
		$pedido->addItem(new CadeiraGold());
		$comprador = new SocioGold();
		$compra = new Compra($pedido, $comprador);

		$estrategia = FabricaEstrategiaDesconto::criar($compra);

		$this->assertInstanceOf('Dojo\Estrategias\EstrategiaSemDesconto', $estrategia);


	}

}

?>