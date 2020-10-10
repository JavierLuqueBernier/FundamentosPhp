<?php

echo "<h1>Unión</h1>";
echo "---------------";
echo "<br>";

$frontent = [
	'frontend' => 'javascript'
];

$backend = [
	'backend' => 'php', 
	'framework' => 'laravel'
];

echo "<pre>";
var_dump($frontent + $backend);
//Si no tuvieras las keys (frontend, backend y framework), javascript se habría superpuesto a PHP, por lo que la union no sería correcta ya que perderiamos datos
//Por eso utilizamos en este caso las keys, para que no se solapen los datos
//Pero en caso de que no tuvieramos keys, deberiamos usar el siguiente método


#array_merge()
//Combina dos o más arrays
$frontent1 = ['javascript'];
$backend1 = ['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontent1, $backend1)); //array_merge es un método propio de php
/*resultado: 
array[3] {
    [0]=> string(10) "javascript"
    [1]=> string(3) "php"
    [2]=> string(7) "laravel"
} */

echo "<br>";



//Ejemplo con los mismo key

#array_merge_recursive
//Une dos o más arrays recursivamente. Esto es necesario cuando en los arrays se repiten las keys y podrían solaparse los datos
// En este caso si utilizaramos solo "array_merge" se solaparian los datos con las keys "a", por eso debemos usar "array_merge_recursive"

$frontent3 = [
	'a' => 'javascript'
];

$backend3 = [
	'a' => 'php', 
	'b' => 'laravel'
];

echo "<pre>";
var_dump(array_merge_recursive($frontent3, $backend3));

//Esto crea un array "a" donde mete unos elementos y otro "b" que mete los demás
//resultado
/* 
array(2) {
  ["a"]=>
  array(2) {
    [0]=>
    string(10) "javascript"
    [1]=>
    string(3) "php"
  }
  ["b"]=>
  string(7) "laravel"
}
*/
echo "<br>";




//Ejemplo con los mismo key
#array_combine
//Crea un nuevo array, usando una matriz para las claves y otra para sus valores
$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

var_dump(array_combine($categories, $courses));

/* resultado:  array(3) {
    ["front"]=> string(10) "javascript"
    ["back"]=> string(3) "php"
    [""framework]=> string(7) "laravel"
}