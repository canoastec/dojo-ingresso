<?php
use Dojo\CalculadoraIngresso;
use Dojo\CadeiraSuperior;
use Dojo\CadeiraGramado;
use Dojo\CadeiraGold;
use Dojo\PublicoGeral;
use Dojo\SocioGold;
use Dojo\SocioChucrute;


class CalculadoraIngressoTest extends PHPUnit_Framework_TestCase{

	public function testDeveCalcularIngressoSemDesconto(){
		$cadeira = new CadeiraSuperior();
		$socio = new PublicoGeral();

		$calculadora = new CalculadoraIngresso($cadeira,$socio);
		$resultado = $calculadora->calcular();

		$this->assertEquals(90,$resultado);
	}

	public function testDeveCalcularIngressoComDesconto(){
		$cadeira = new CadeiraSuperior();
		$espectador = new SocioGold();

		$calculadora = new CalculadoraIngresso($cadeira,$espectador);
		$resultado = $calculadora->calcular();

		$this->assertEquals(67.50,$resultado);
	}

}