<?php

$data = 'Estudio PHP';

echo $data[0]; /* Imprime la letra E */

$post = "<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque debitis eos inventore rerum architecto voluptate .";

$extract = substr($post, 0, 20);
//substr() = Función para substraer String
//vamos a contar 20 CARACTERES desde 0
/* ----------------------------------------------------------- */

echo "$extract... [ver más]";
//Resultado: Lorem ipsum dol... [ver más]



$datos = 'JavaScript, PHP, Laravel';
$tags = explode(', ', $datos);
//Explode: extrae los datos separados por un delimitador en este caso una coma(,) y los convierte en un array;

echo "<pre>";
var_dump($tags);

//Resultado sin <pre>: array(3) { [0]=> string(10) "JavaScript" [1]=> string(3) "PHP" [2]=> string(7) "Laravel" }

//Resultado con <pre>: 
					/*array(3) {
					[0]=>
					string(10) "JavaScript"
					[1]=>
					string(3) "PHP"
					[2]=>
					string(7) "Laravel"
					}*/

                    
/* ------------------------------------------------------------------ */

#Pasar un array a string					
//Agregamos un delimitador(,) a los datos en un array

$courses = ['JavaScript, PHP, Laravel'];
echo implode(', ', $courses);

//Resultado: javascript, php, laravel
echo "<br><br>";
$course = "     Curso de PHP     ";
//Hacemos que los espacios se eliminen
$course =  trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
//trim quita los espacios en tus textos, “sanea” el código para evitar inyección de caracteres. 
//Además existe: ltrim(left) y rtrim(right)

