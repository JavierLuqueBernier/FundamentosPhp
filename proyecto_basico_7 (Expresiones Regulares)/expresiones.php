<?php

#EXPRESIONES REGULARES
/*
/:  CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN
*/

$password = '12345';
$password1 = '123456a';
$password2 = '123456';
//Iniciamos con un contenedor // luego iniciamos con  ^ y que solo permita un patrón del 0 al 9 [0-9] 
//la condicion en llaves y que tenga como minimo 6 elementos y máximo 9 caracteres {6,9}

echo preg_match('/^[0-9]{6,9}$/', $password); //preg_match es una función exclusiva de php
echo "<br>";
//El resultado sería 0 porque $password tiene 5 caracteres y nosotros estamos poniendo la condicion de que tenga al menos 6 caracteres

var_dump(preg_match('/^[0-9]{6,9}$/', $password1));
echo "<br>";
//Resultado int(0) porque $password1 tiene una letra, la cual no es admitida en la expresión regular que hemos creado

var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password2));
//Resultado bool(true). Devuelve "True" porque $password2 cumple con todas las condiciones impuestas en la expresion regular