<?php
include_once('cuadrado.php');
class rectangulo extends cuadrado {

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
		return ($this->altura * $this->base);
	}

	public function perimetro(){
		return (($this->base + $this->altura) * 2);
	}

	public function escalar($cant){
		$this->base *= $cant;
		$this->altura *= $cant;
	}

	public function toString(){
		return 'Rectangulo de ' . $this->base . ' de base, ' . $this->altura . ' de altura, ' . $this->perimetro() . ' de perimetro y ' . $this->area() . ' de area, y de origen en ' . parent::toString() . '</br>';
	}

}

?>
