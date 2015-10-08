<?php
include_once('figura.php');
class triangulo extends figura {

	private $base;
	private $altura;

	public function __construct(){
		parent::__construct();
		$this->base = 0;
		$this->altura = 0;
	}

	public function setBase($newBase){
		$this->base = $newBase;
	}

	public function setAltura($newAltura){
		$this->altura = $newAltura;
	}

	public function getBase(){
		return $this->base;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function desplazar($moveX, $moveY){
		$this->origen->desplazar($moveX, $moveY);
	}

	public function area(){
		return (($this->altura * $this->base) / 2);
	}

	public function perimetro(){
		return ($this->base + $this->altura + sqrt(pow($this->base, 2) + pow($this->altura, 2)));
	}

	public function escalar($cant){
		$this->base *= $cant;
		$this->altura *= $cant;
	}

	public function toString(){
		return 'Triangulo de ' . $this->base . ' de base, ' . $this->altura . ' de altura, ' . $this->perimetro() . ' de perimetro y ' . $this->area() . ' de area, y de origen en ' . parent::toString() . '</br>';
	}

}

?>
