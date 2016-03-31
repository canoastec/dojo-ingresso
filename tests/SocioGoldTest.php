<?php
include_once 'src/SocioGold.php';

class SocioGoldTest extends PHPUnit_Framework_TestCase{

	public function testDeveDarDescontoDeVInteCIncoPorCento(){
		$socio = new SocioGold();

		$resultado = $socio->getDesconto();

		$this->assertEquals(25, $resultado);
	}

}

 ?>