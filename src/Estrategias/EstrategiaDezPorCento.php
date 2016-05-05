<?php
	namespace Dojo\Estrategias;
	use Dojo\Estrategias\EstrategiaDeDesconto;
	use Dojo\Compra;

	class EstrategiaDezPorcento implements EstrategiaDeDesconto{

		public function calcular(Compra $compra){
			return $compra->getValor() * 0.10;
		}

	}

 ?>