<?php
include_once('punto.php');
abstract class figura{

	protected $origen;

	public function __construct(){
		$this->origen = new punto();
	}

	public function desplazar($moveX, $moveY){
		$this->origen->desplazar($moveX, $moveY);
	}

	public function getOrigen(){
		return $this->origen;
	}

	abstract public function area();

	abstract public function perimetro();

	abstract public function escalar($cant);

	public function toString(){
		return $this->origen->toString();
	}
}

?>
