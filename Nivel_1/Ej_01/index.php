
<?php include 'Empleado.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_1_Tema_4_Nivel_1_EJ_01</title>

    <style>
        body{
            background-color: cadetblue;
            color: aliceblue;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
    </style>

</head>
<body>
<h1>Gracias por contribuir con Hacienda ^^</h1>
<?php
/*
Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. 
Defineix un mètode que rebi com a paràmetres el nom i el sou. Planteja un segon mètode
que imprimeixi el nom i un missatge que mostri :
si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).
*/

echo $empleado1 -> calcularImpuestos();



?>
</body>
</html>