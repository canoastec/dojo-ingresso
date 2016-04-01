<?php

include_once "src/CompraIngresso.php";
include_once "src/CalculadoraDescontoCompra.php";

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