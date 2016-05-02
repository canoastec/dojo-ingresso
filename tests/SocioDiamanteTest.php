<?php
use Dojo\SocioDiamante;

class SocioDiamanteTest extends PHPUnit_Framework_TestCase{

	public function testDeveDarCInquentaPorCentoDeDesconto()
	{
		$espectador = new SocioDiamante();

		$resultado = $espectador->getDesconto();

		$this->assertEquals($resultado,50);
	}

}
 ?>