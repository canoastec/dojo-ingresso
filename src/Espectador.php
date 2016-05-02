<?php
include_once 'Comprador.php';
interface Espectador extends Comprador{

	public function getDesconto();
}

 ?>