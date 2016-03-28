<?php

	Class CalculadoraIngresso{

		private $cadeira;
		private $espectador;

		public function  __construct(Cadeira $cadeira, Espectador $espectador) {
			$this->cadeira = $cadeira;
			$this->espectador = $espectador;
		}

		public function calcular(){
			$ingresso = $this->cadeira->getPreco() * (1 - ($this->espectador->getDesconto() / 100));

			return $ingresso;
		}
	}

 ?>