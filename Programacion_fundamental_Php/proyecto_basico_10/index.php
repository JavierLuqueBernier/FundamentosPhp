<?php

echo "<h1>Array Complejo</h1>";
echo "---------------";
echo "<br>";

#Array
//Es aquel elemento que no identificamos de manera directa.

$courses = [
	'frontend' => 'javascript', 
	'framework' => 'laravel', 
	'backend' => 'php'
];

echo '<pre>'; /* pre era para que el array se mostrara con la llave */
var_dump($courses);

echo "<br>";

foreach ($courses as $key => $value){
	echo "$key: $value <br>";
}

echo "<br>";
//-----------------------------------------------------------------------------

$contador = 1;
foreach ($courses as $course){
	echo "$contador.- $course <br>";
	$contador++; 
}

echo "<br>";

/* Con esta función lo que se reproduce en pantalla es lo siguiente:
1.- javascript 
2.- laravel 
3.- php */

//--------------------------------------------------------------------------

function upper($course){
	echo strtoupper("$course <br>"); /* strtoupper es otra función propia de Phpn que pasa a mayusculas cadenas de string */
}

array_walk($courses, 'upper');  /* array_walk es una función propia de Php que lo que hace es recorrer el array */

echo "<br>";

//con esta función lo que mostramos es exclusivamente "Javascript, laravel y php" convertidos a mayúsculas
//..........................................................................................................

function upper1($course, $key){
	echo strtoupper($course) . ": $key <br>";
}

array_walk($courses, 'upper1');

/*Con esta función lo que se muestra en pantalla es:
JAVASCRIPT: frontend 
LARAVEL: framework 
PHP: backend  */

/*	
	//Existe un Key
	array_key_exists('frontend', $courses);
	//Existe un valor
	in_array('javascript', $courses);
	//Muestra todos los Key
	array_keys($courses);
	//Muestra todos los valores
	array_values($courses);
*/
