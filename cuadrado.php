<?php
include_once('figura.php');

class cuadrado extends figura {

	private $lado;

	public function __construct(){
		parent::__construct();
		$this->lado = 0;
	}

	public function setLado($newLado){
		$this->lado = $newLado;
	}

	public function getLado(){
		return $this->lado;
	}

	public function desplazar($moveX, $moveY){
		$this->origen->desplazar($moveX, $moveY);
	}

	public function area(){
		return (pow($this->lado, 2));
	}

	public function perimetro(){
		return ($this->lado * 4);
	}

	public function escalar($cant){
		$this->lado *= $cant;
	}

	public function toString(){
		return 'Cuadrado de ' . $this->lado . ' de lado, ' . $this->perimetro() . ' de perimetro y ' . $this->area() . ' de area, y de origen en ' . parent::toString() . '</br>';
	}

}

?>
