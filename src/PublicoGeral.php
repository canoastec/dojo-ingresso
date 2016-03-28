<?php
include_once 'Espectador.php';

class PublicoGeral implements Espectador{

	public function getDesconto(){
		return 0;
	}
}
 ?>
