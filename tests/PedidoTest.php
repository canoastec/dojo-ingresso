<?php 
use Dojo\Pedido;
use Dojo\CadeiraGold;
use Dojo\CadeiraGramado;
use Dojo\CadeiraSuperior;


class PedidoTest extends PHPUnit_Framework_TestCase{
	function testDeveAdicionarItensAoPedido(){
		$pedido = new Pedido();

		$cadeira = new CadeiraGold();
		$pedido->addItem($cadeira);

		$cadeira = new CadeiraGramado();
		$pedido->addItem($cadeira);

		$cadeira = new CadeiraSuperior();
		$pedido->addItem($cadeira);

		$cadeiras = $pedido->getItens();
		$this->assertCount(3,$cadeiras);
	}
}

?>