<?php

// public -> Pueden ser accedidos a lo largo de todo el sistema
// protected -> Solo pueden acceder aquellas clases que hereden de mi
// private -> Nadie puede hacer uso de este sistema ni siquiera los hijos que hereden de mi.

// Podemos crear propiedades, metodos y constantes.
//Cuando escribimos el encapsulamiento garantizamos la integridad de los datos. 

class User 
{
    //constante
    public const PAGINATE = 25;

    //método
    public $username;

    //función
    public function getUserName()
    {
        //
    }
}

//---------------------------Ejemplos--------------------------------
//Public

class User {

    public $name;
    
}

$pablito = new User;
$pablito->name = "Pablito";

//--------------------------------------------------------------------

// Protected

class User {
    protected $name;
}
    
$pablito = new User;
$pablito->name = “Pablito”; //Este ejemplo mandaría un error, pues $name es protected y no puedo llamarla desde fuera de la clase, pero este otro ejemplo:

//
class User {
    protected $name;    
}

class Pablito extends User{

    public function poner_nombre($nombre){
        $this->name = $nombre;
    }

}


$pablito = new Pablito;
$pablito->poner_nombre("Pablito"); 

// Si funcionaría, pues las clases que heredan de mi clase SI pueden acceder.

//-----------------------------------------------------------------------------------------------------------------------------

// Private

// Este nos indica que nada, absolutamente nada que NO esté dentro de mi clase va a poder acceder a esa propiedad o método, ni aunque la heredes,
//esa propiedad va a estar disponible única y estrictamente dentro de mi clase, por lo que el ejemplo anterior daría error (Si hubiésemos puesto private $name),
//pero el siguiente ejemplo funcionaría a la perfección:

class User {

    private $name;

    public function poner_nombre($nombre) {
        $this->name = $nombre;
    }
    
}

$pablito = new User;
$pablito->poner_nombre("Pablito"); 

//este es el único caso en el que la llamada de la variable $name no daría fallo, solo siendo llammada desde dentro de su clase.
