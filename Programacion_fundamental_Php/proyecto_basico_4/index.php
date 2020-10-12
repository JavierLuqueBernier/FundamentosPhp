<?php

echo 'Un texto de una sola línea <br>';

$name = 'Javier';
echo "Mi nombre es $name <br>"; /* esto es lo mismo que */ echo 'Mi nombre es ' . $name;

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

class User {
    public $name = 'Javier';
}

$user = new User;

echo "<br> $user->name quiere aprender {$courses['backend'] [0]} <br>";

/* ------------------------------------------------------------- */

$maestro = 'JavierLuque';
$JavierLuque = 'Javascript';
$Javascript = 'Curso Básico';

echo "$maestro es profesor de ${$maestro} del ${${$maestro}} <br>"; /* El resultado de esto es: JavierLuque es profesor de Javascript del Curso Básico */

/* ----------------------------------------------------------------- */

function getTeacher() {
    return 'teacher';
}

$teacher = 'Javier';

echo "{${getTeacher()}} enseña PHP"; /* esto da: Javier enseña PHP */