<?php
	namespace Dojo\Estrategias;

	use Dojo\Estrategias\EstrategiaDeDesconto;
	use Dojo\Compra;

	class EstrategiaSemDesconto implements EstrategiaDeDesconto{
		public function calcular(Compra $compra){
			return 0;
		}
	}

 ?>