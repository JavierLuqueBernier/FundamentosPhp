<?php
echo "<h1>Argumentos</h1>";

#Valores
//Hace referencia a que nosotros colocamos directamente una variable($name) esperando que eso se cumpla
function greet($name){
	return "<h1>Hola, $name</h1>"; 
}

echo greet('Danny');

#Referencias
//Ademas de hacer un cambio interno queremos que este cambio afecte al elemento que tenemos afuera. Eso se consigue añadiendo el simbolo "&" delante de la variable
$course = 'PHP';
function path(&$course){  /* Aqui vemos como se añade el simbolo & delante del nombre de la variable */
	$course = 'Laravel';
	echo $course; //Laravel
}

path($course);
echo "<br>";
echo $course; //Laravel

echo "<br>";

#Predeterminado
//Asignamos de manera fija un elemento o un valor y podemos alterar el valor con un parametro
function greet1($name = 'Danny'){
	return "Hola, $name";
}

echo greet1();
echo "<br>";
echo greet1('Abel');

/* ----------------------------------------------------------------------------------------------------------- */

echo "<h1>Return</h1>";
echo "---------------";
//Forma parte de cualquier función
//Necesitamos Return precisamente para devolver y entregar con éxito lo que has procesado anteriormente

function greet2(){
	return "<h1>Hola</h1>"; 
}

echo greet2();


//Para retornar mas de un valor o elemento utilizamos un array
function greet3(){
	return ['PDF', 'Laravel']; 
}

var_dump(greet3());

exit(); //detiene la ejecución del sistema
return; //retorna
