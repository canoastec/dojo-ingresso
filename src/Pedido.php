<?php
include_once 'Cadeira.php';

class Pedido{

	private $itens;

	public function __construct(){
		$this->itens = [];
	}

	public function addItem(Item $item){
		$this->itens[] = $item;
	}

	public function getItens(){
		return $this->itens;
	}

	public function contarItens(){
		return count($this->itens);
	}

}

 ?>