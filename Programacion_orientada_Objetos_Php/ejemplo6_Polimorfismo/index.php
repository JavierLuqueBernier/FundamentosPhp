<?php

abstract class Polimorfismo
{
    protected $name;

    private function getClassName ()
    {
        return get_called_class(); //get_called_class es un metodo propio de php que devuelve el nombre de la clase desde donde se ejecuta el método.
    }

    public function login()
    {
        return "Mi nombre es $this->name desde la clase {$this->getClassName()} <br>";
    }

}

class Admin extends Polimorfismo {
    public function __construct($name)
    {
        $this->name = $name;
    }
}


class User extends Polimorfismo {
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Guest extends Polimorfismo {
    protected $name = 'Invitado';
}

$guest = new Guest();
echo $guest->login();
//Mi nombre es Invitado de la clase guest.


$user = new User('Javier');
echo $user->login();
//Mi nombre es Javier de la clase user.


$admin = new Admin('Luque');
echo $admin->login();
//Mi nombre es Luque de la clase Admin.



?>