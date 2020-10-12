<?php


 class User
{
    public $name;

    public function __construct($name) //__construct es un método que me permite inicializar variables al mmomento de crear el objeto
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{
    public function getName()
    {
        return "Soy $this->name";
    }
}


$admin = new Admin('Italo');
echo $admin->getName();






//EJEMPLO CON FINAL.


// la palabra clave "final" para lo que sirve es para que aunque usemos una función en una clase hija de una clase madre, la variable que se contenia
//  dentro de la madre, no pueda ser sobreescrita. Estamos rompiendo la Herencia al utilizar la palabra clave "final"


// final class User  
// {
//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }
// }

// class Admin
// {
    //No nos deja hacer herencia asique no podemos utilizar el "extend"      
// }


// $admin = new User('Italo');
// echo $admin->getName();
