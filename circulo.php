<?php
include_once('figura.php');
class circulo extends figura {

	private $radio;

	public function __construct(){
		parent::__construct();
		$this->radio = 0;
	}

	public function setRadio($newRadio){
		$this->radio = $newRadio;
	}

	public function getRadio(){
		return $this->radio;
	}

	public function desplazar($moveX, $moveY){
		$this->origen->desplazar($moveX, $moveY);
	}

	public function area(){
		return (3.1416 * $this->radio * $this->radio);
	}

	public function perimetro(){
		return (2 * 3.1416 * $this->radio);
	}

	public function escalar($cant){
		$this->radio *= $cant;
	}

	public function toString(){
		return 'Circulo de ' . $this->radio . ' de radio, ' . $this->area() . ' de area y ' . $this->perimetro() . ' de perimetro, y de origen en ' . parent::toString() . '</br>';
	}

}

?>
