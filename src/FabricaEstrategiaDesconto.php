<?php
include_once 'Estrategias/EstrategiaDezPorcento.php';
include_once 'Estrategias/EstrategiaSemDesconto.php';
class FabricaEstrategiaDesconto{

	public static function criar(Compra $compra){
		
		if($compra->getPedido()->contarItens() > 1) {
			return new EstrategiaDezPorcento();
		}

		if($compra->getPedido()->contarItens() == 1) {
			return new EstrategiaSemDesconto();
		}

	}

}

 ?>