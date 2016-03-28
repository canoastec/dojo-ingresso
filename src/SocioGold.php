<?php
	include_once 'Espectador.php';

	class SocioGold implements Espectador{

		public function getDesconto(){
			return 25;
		}

	}

 ?>