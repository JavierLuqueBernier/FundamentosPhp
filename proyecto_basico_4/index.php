<?php

echo 'Un texto de una sola línea';

$name = 'Javier';
echo "Mi nombre es $name <br>"; /* esto es lo mismo que */ echo 'Mi nombre es ' . $name;

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "{$courses['backend'] [0]}";