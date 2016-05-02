<?php
use Dojo\PublicoGeral;

class PublicGeralTest extends PHPUnit_Framework_TestCase {

	function testDeveDarZeroPorcentoDesconto() {
		$espectador = new PublicoGeral();

		$resultado =$espectador->getDesconto();

		$this->assertEquals($resultado,0);
	}
}

?>