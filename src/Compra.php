<?php
namespace Dojo;

class Compra{

	private $pedido;
	private $comprador;

	public function __construct(Pedido $pedido, Comprador $comprador){
		$this->pedido = $pedido;
		$this->comprador = $comprador;
	}

	public function getPedido(){
		return $this->pedido;
	}

}

 ?>