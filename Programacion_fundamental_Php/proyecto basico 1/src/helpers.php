<?php

if( ! function_exists('upper')) {  //Aquí estamos diciendo "si no existe una función llamada upper, entonces llamamos a esta"
    function upper($value) {
        return Text\Format::upperText($value);
    }
}

if( ! function_exists('lower')) {
    function lower($value) {
        return Text\Format::lowerText($value);
    }
}

