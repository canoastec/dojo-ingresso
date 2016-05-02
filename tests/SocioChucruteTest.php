<?php
use Dojo\SocioChucrute;


class SocioChucruteTest extends PHPUnit_Framework_TestCase
{

	public function testDeveDarDescontoDezPorcento()
	{
		$socioChucrute = new SocioChucrute();

		$resultado = $socioChucrute->getDesconto();

		$this->assertEquals(10, $resultado);
	}
}
?>