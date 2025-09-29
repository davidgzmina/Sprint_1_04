<?php

class Empleado {

    public $name;
    public $salary;

    //constructor
    public function __construct($name,$salary)
    {
        $this-> name = $name;
        $this-> salary = $salary;
    }

    public function calcularImpuestos(){
        if( $this-> salary > 6000){
            return "El empleado " . $this-> name . " debe pagar impuestos ya que tiene un salario de " .  $this-> salary . " euros.";
        }
        else{
            return "El empleado " . $this-> name . " no debe pagar impuestos ya que tiene un salario de " .  $this-> salary . " euros.";
        }
        
    }

}

$empleado1 = new Empleado("Juan", 7500);



