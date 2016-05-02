<?php
use Dojo\CompraIngresso;
use Dojo\CalculadoraDescontoCompra;
use Dojo\SocioGold;
use Dojo\CadeiraSuperior;
use Dojo\CadeiraGramado;

class CalculadoraDescontoCompraTest  extends PHPUnit_Framework_TestCase {

	function testDeveDarDezPorcentoDescontoQuandoComprarMaisDeUmIngresso() {
		$espectador = new SocioGold();
		$compra = new CompraIngresso($espectador);
		$compra->addCadeira(new CadeiraSuperior());
		$compra->addCadeira(new CadeiraGramado());

		$calculadora = new CalculadoraDescontoCompra($compra);
		$resultado = $calculadora->calcular();

		$this->assertEquals($resultado,141.75);
	}
}

?>