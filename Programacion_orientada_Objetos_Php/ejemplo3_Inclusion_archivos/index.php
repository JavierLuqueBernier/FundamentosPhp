<?php

require 'greet.php';
//Si utilizamos require varias veces, nos dará error porque no se debe requerir el mismo archivo más de una sola vez.
//Por eso, podemos utilizar require_once para que el compilador entienda que si lo hemos requerido 2 veces es un error nuestro e ignora uno de los dos requerimientos

echo greet('Italo', 'Como estás...?');