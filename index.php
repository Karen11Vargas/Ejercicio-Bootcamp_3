<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Tema 8</title>
</head>
<body>
    
 <h1>PERSONA</h1>
 <h4>Concepto de Encapsulamiento en una clase</h4>



 <?php
    
    require 'Persona.php';

    $persona->setNombre("KarenL");
    $persona->setEdad(16);
    $persona->setTelefono(123456);


    echo '<h3>Nombre: </h3>'.$persona->getNombre()."<br>";
    echo '<h3>Edad: </h3>' .$persona->getEdad()."<br>";
    echo '<h3>Telefono: </h3>' .$persona->getTelefono()."<br>";

 ?>

 
</body>
</html>