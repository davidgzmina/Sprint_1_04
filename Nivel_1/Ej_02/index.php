
<?php
require 'Shape.php';
/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt.
Defineix dues subclasses;
Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.
*/


$triangulo1 = new Triangulo(20,8);
$rectangulo1 = new Rectangulo(10,6);

echo $triangulo1 -> calcularArea($triangulo1) . PHP_EOL; 
echo $rectangulo1 -> calcularArea($rectangulo1); 





