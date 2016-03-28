<?php
include_once '../src/CalculadoraIngresso.php';
include '../src/CadeiraSuperior.php';
include '../src/CadeiraGramado.php';
include '../src/CadeiraGold.php';
include '../src/PublicoGeral.php';
include '../src/SocioGold.php';

class CalculadoraIngressoTest extends PHPUnit_Framework_TestCase{

	public function testNaoDeveDarDescontoParaPublicoGeralCadeiraSuperior(){
		$cadeira = new CadeiraSuperior();
		$socio = new PublicoGeral();

		$calculadora = new CalculadoraIngresso($cadeira,$socio);
		$resultado = $calculadora->calcular();

		$this->assertEquals(90,$resultado);
	}

	public function testNaoDeveDarDescontoParaPublicoGeralCadeiraGold()
	{
		$cadeira = new CadeiraGold();
		$pagante = new PublicoGeral();

		$calculadora = new CalculadoraIngresso($cadeira, $pagante);
		$resultado = $calculadora->calcular();

		$this->assertEquals(150, $resultado);
	}

	public function testNaoDeveDarDescontoParaPublicoGeralCadeiraGramado(){
		$cadeira = new CadeiraGramado();
		$pagante = new PublicoGeral();

		$calculadora = new CalculadoraIngresso($cadeira, $pagante);
		$resultado = $calculadora->calcular();

		$this->assertEquals(120, $resultado);
	}

	public function testDeveCalcularIngressoComoSessentaESeteComCinquentaCadeiraSuperiorSocioGold(){
		$cadeira = new CadeiraSuperior();
		$espectador = new SocioGold();

		$calculadora = new CalculadoraIngresso($cadeira,$espectador);
		$resultado = $calculadora->calcular();

		$this->assertEquals(67.50,$resultado);
	}

}