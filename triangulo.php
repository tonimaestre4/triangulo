<?php
class Triangulo{

//atributos
    private $base;
    private $altura;

    function __construct($base,$altura){
    $this->base=$base;
    $this->altura=$altura;
}

//metodos propios
public function areaTriangulo(){
    $area=($this->base*$this->altura)/2;
    return $area;
}
public function perimetroTriangulo(){
    $hipotenusa=sqrt($this->base*$this->base+$this->altura*$this->altura);
    $perimetro=$hipotenusa+$this->base+$this->altura;
    return $perimetro;
}
}
?>

