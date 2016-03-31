<?php

include_once 'src/SocioDiamante.php';

class SocioDiamanteTest extends PHPUnit_Framework_TestCase{

	public function testDeveDarCInquentaPorCentoDeDesconto()
	{
		$espectador = new SocioDiamante();

		$resultado = $espectador->getDesconto();

		$this->assertEquals($resultado,50);
	}

}
 ?>