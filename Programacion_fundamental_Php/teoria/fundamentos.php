<?php

// Asignación

$num = 9;       /* Las variables en php siempre van a iniciar con "$" SIEMPRE */
$lang = [
    'es' => 'español', /* El operador de asignación “=” funciona en las variables, mientras que el operador “=>” funciona en arreglos asociativos */
    'en' => 'ingles'
];

// Aritmética

echo "Suma 2 + 2" . ((int) 2 + (int) 2); /* Para concatenar (Unir dos strings) en PHP se hace mediante un punto “.” */
echo "Resta 2 - 2" . ((int) 2 - (int) 2);
echo "Multiplica 2 + 2" . 2 * 2;
echo "Divide 2 / 2" . 2 / 2;
echo "Módulo 2 % 2" . 2 % 2;
echo "Exponencial 2 ** 2" . 2 ** 2;

// Comparación

// Igual ==, valor '9' == 9;           comparamos solo el valor --> 9(string) es igual en valor a 9(number)

// Igual ===, valor - tipo 9 === 9;    comparamos el valor y el tipo

// Diferencias !=, valor '9' != 8;

// DIferencias !==, valor - tipo '9' !== 9;  9(string) no es igual en tipo a 9(number)

//<, >, <=, >=

//------------------------

// Variables variables
$app = 'name';
$name = 'Platzi';

echo $app; // aqui, echo muestra 'name'
echo $$app; // aqui, echo muestra 'Platzi'

?>