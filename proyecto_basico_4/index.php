<?php

/* echo 'Un texto de una sola linea'; */

$name = 'Javier';
echo "Mi nombre es $name <br>"; /* Esto es igual que */ echo 'Mi nombre es ' . $name . '<br>';

$courses = [
    'backend' = [
        'PHP',
        'Laravel'
    ]
];

class User {
    public $name = 'italo';
}

$user = new User;

echo "$user->name quiere aprender {$courses['backend'] [0]}";

