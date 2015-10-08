<?php
class punto {
	private $ejeX;
	private $ejeY;

	public function __construct(){
		$this->ejeX=0;
		$this->ejeY=0;
	}

	public function setX($newX){
		$this->ejeX = $newX;
	}

	public function setY($newY){
		$this->ejeY = $newY;
	}

	public function getX(){
		return $this->ejeX;
	}

	public function getY(){
		return $this->ejeY;
	}

	public function desplazar($moveX, $moveY){
		$this->ejeX += $moveX;
		$this->ejeY += $moveY;
	}

	public function distancia($point){
		$distancia = sqrt(pow($point->getX() - $this->ejeX, 2) + pow($point->getY() - $this->ejeY, 2));
		return $distancia;
	}

	public function toString(){
		return 'Coordenada X = ' . $this->ejeX . ' y coordenada Y = ' . $this->ejeY;
	}
}




?>
