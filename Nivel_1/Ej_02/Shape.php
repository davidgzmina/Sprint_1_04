<?php

class Shape{
    public $ancho;
    public $alto;


    public function __construct($ancho, $alto)
    {
        $this -> ancho = $ancho;
        $this -> alto = $alto;
    }

}

class Rectangulo extends Shape {
    public function calcularAreaRectangulo(){
        $areaRec = $this->alto * $this ->ancho;
        return "<br>El rectangulo con una altura de " . $this-> alto . " metros y un ancho de " .  $this-> ancho . " metros tiene una area de "
        . $areaRec . " metros cuadrados."; 
    }
}

class Triangulo extends Shape {
    public function calcularAreaTriangulo(){
        $areaTri = ($this->alto * $this->ancho)/2; 
        return "El triangulo con una altura de " . $this-> alto . " metros y un ancho de " .  $this-> ancho . " metros tiene una area de "
        . $areaTri . " metros cuadrados.";
    }
}

$triangulo1 = new Triangulo(20,8);
$rectangulo1 = new Rectangulo(10,6);

