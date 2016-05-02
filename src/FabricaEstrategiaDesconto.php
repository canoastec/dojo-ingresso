<?php
namespace Dojo;

use Dojo\Estrategias\EstrategiaDezPorcento;
use Dojo\Estrategias\EstrategiaSemDesconto;

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