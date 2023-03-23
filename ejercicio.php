<?php

//Ejercicio #1
echo "Ejercicio #1"."<br>";

$numeroId = 0;

if ($numeroId >= 0) {

    echo "El numero es positivo"."<br>";
}else{
    echo "El numero es negativo"."<br>";
}

//Ejercicio #2
echo "Ejercicio #2"."<br>";

$numeroWhile = 0;

while ($numeroWhile <3) {
    $numeroWhile ++;
    echo $numeroWhile."<br>";
}

//Ejercicio #3
echo "Ejercicio #3"."<br>";

do {
    $numeroWhile++;
    echo $numeroWhile."<br>";
} while ($numeroWhile < 3);

//Ejercicio #4
echo "Ejercicio #4"."<br>";

for ($numeroFor=0; $numeroFor <= 3 ; $numeroFor++) { 
    echo $numeroFor."<br>";
}

//Ejercicio #%
echo "Ejercicio #5"."<br>";

$estacion = "Summer";

switch ($estacion) {
    case 'Spring':
        echo "Estas en la estacion: $estacion";
    break;
    
    case 'Summer':
        echo "Estas en la estacion: $estacion";
    break;

    case 'Winter':
        echo "Estas en la estacion: $estacion";
    break;

    case 'Fall':
        echo "Estas en la estacion: $estacion";
    break;

    default:
        echo "Esa estacion NO existe :(";
    break;
}