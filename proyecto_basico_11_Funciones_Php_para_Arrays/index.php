<?php

echo "<h1>Funciones PHP para arrays</h1>";
echo "---------------";

$courses = ['php', 'javascript', 'laravel'];
$course = [
	10 => 'php', 
	100 => 'javascript', 
	1000 => 'laravel'
];


//ordenar 
sort($courses);

#Ordenar de forma Recursiva (es decir, al revés)
//rsort($courses);

// Con sort($courses) ordenaría el array de la siguiente manera: javascript, laravel, php (porque estamos ordenando por numero de caracteres) .
// Pero con "rsort" de ordena así: php, laravel, javascript



#Ordenar por Key
ksort($course);
//resultado: php, javascrip, laravel

//krsort($course); //Ordenar de forma Recursiva las keys
//resultado: laravel, javascript, php

echo("<pre>");
var_dump($courses);
echo "<br>";
var_dump($course);

echo "<br>";

echo "---------------------------------------------------<br>";

#array_slide array rebanada
//en este caso eliminamos el Key 1
array_slice($courses, 1);
var_dump(array_slice($course, 1));
//Resultado
/*
array(2) {
	[0]=>
	string(10) "javascript"
	[1]=>
	string(7) "laravel"
  }
*/

echo "<br>";


#array_chunk array pedazo
//en este caso crea un 2 arrays y uno de ellos contiene dos elementos de los 3 que contiene el array principal
$courses_chunk = ['php', 'javascript', 'laravel'];

array_chunk($courses_chunk, 2);
var_dump(array_chunk($courses_chunk, 2));
echo "<br>";


#array_shift()
//Muestra un elemento del principio del array
$courses_shift = ['php', 'javascript', 'laravel'];
array_shift($courses_shift);
var_dump(array_shift($courses_shift));

echo "<br>";
echo "--------------------------------------------------------2<br>";


#array_pop()
//Extrae el último elemento del final del array
$courses_pop = ['php', 'javascript', 'laravel'];
array_pop($courses_pop);
var_dump($courses_pop);
echo "<br>";



#array_unshift()
//Añadir al inicio de un array uno a más elementos
$courses_unshift = ['php', 'javascript', 'laravel'];
array_unshift($courses_unshift, 'laravel2', 'javascript2');
var_dump($courses_unshift);

echo "<br>";
echo "-------------------------------------------------3<br>";


#array_push()
//Inserta uno o más elementos al final de un array
$courses_push = ['php', 'javascript', 'laravel'];
array_push($courses_push, 'laravel1', 'javascript1');
var_dump($courses_push);
echo "<br>";



#array_flip()
//Intercambia todas las claves de un array con sus valores asociados
$courses_flip = [
	'backend' => 'php', 
	'forntend' => 'javascript'
];

$intercambio = array_flip($courses_flip);
var_dump($intercambio);
echo "------------------------------------------------------4<br>";



echo "<h1>Comparación</h1>";
echo "---------------";
echo "<br>";
$courses = ['php', 'javascript'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

#array_diff();
//Calcula la diferencia entre arrays
//Por ejemplo, tengo dos cursos(PHP y JS) pero quisiera saber que otros cursos le gustaría a mis estudiantes
//Con esto comparo los array y descarto los cursos que yo ya tengo.
echo "<pre>";
var_dump(array_diff($wishes, $courses));

/* resultado : 
    array(2) {
        [1]=> string(7) "laravel",
        [3]=> string(5) "vuejs"
} */
echo "<br>";


//Evalua depende al orden que coloquemos
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
var_dump(array_diff($arrayB, $arrayA));

#array_diff_assoc()
//Calcula la diferencia entre arrays con un chequeo adicional de índices
