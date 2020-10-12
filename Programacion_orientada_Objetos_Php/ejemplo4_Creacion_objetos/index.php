<?php

require 'person.php';
require 'user.php';
require 'admin.php';
//hemos puesto todo el archivo en pruebas para hacer la prueba de requerir archivos externos donde se almacenan nuestras clases


$user = new User; //tan solo utilizando la palabra "new" convertimos una variable ($user) en un objeto a partir de la clase User
$user->type = new Admin; //tenemos la posibilidad de definir un tipo a nuestro objeto (type = new Admin) y en este caso, ese tipo se extiende a la clase Person

echo $user->type->greet(); //llamamos al objeto $user, dentro de él, a su tipo, que es Admin y como este se extiende a la clase Person, llamamos a la función que contiene.





//Para poder crear objetos lo principal es crear clases, es este caso vamos a crear varias, entre ellas la clase Person y la clase User.
/* class Person{
    public function greet() {
        return "Hola $this->name";
    }
} */

/* class User {
    public $type;
} */

/* class Admin extends Person {
    public $name = 'Administrador';
} */