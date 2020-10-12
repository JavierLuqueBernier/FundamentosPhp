<?php

require_once("SearchInterface.php");

class User implements Search
{
    //aquí desarrollamos
    public function all()
    {
        return "Obteniendo a los Users aunque también puedo obtener un json <br/>";
    }
}