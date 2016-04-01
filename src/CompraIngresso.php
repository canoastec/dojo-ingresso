<?php

class CompraIngresso{

	private $cadeiras;

	public function addCadeira(Cadeira $cadeira){
		$this->cadeiras[] = $cadeira;
	}


}

 ?>