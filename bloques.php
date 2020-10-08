<?php

if ($edad < 18) {
    echo "Es menor de edad";
} elseif ($edad > 50) {
    echo "Es demasiado mayor";
} else {
    echo "Tiene una edad óptima";
}

switch ($opcionEscogida) {  // if y switch valen para lo mismo pero es recomendable utilizar switch si hay más de 3 condiciones
    case 1:
        echo "Eligió la opción 1";
        break;
    case 2:
        echo "Eligió la opción 2";
        break;
    case 3:
        echo "Eligió la opción 3";
        break;
    default:
        echo "Eligió una opción diferente";
        break;
}

for ($i=1; $i < 6; $i++) {
    echo $i;
}
# resultado: 12345

// Consulta de usuarios

foreach ($datos as $name) {
    # code...
}

//--------------------------------
$a = 100;
while ($a <= 10) {
    echo "Este ciclo no acaba mientras que 'a' sea menor o igual que 10";

    $a++;              //En esta función While el codigo nunca entraría en la función dado que $a no cumple con la condición
}

//--------------------------------
$a = 100;
do {
    # code...
} while ($a <= 10);    // Las funciones doWhile están hechas para que aunque un valor no cumpla con la condición de la función entre, aunque sea una sola vez.