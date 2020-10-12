<?php

require_once("SearchInterface.php");

class Post implements Search
{
    //aquí desarrollamos
    public function all()
    {
        return "Obteniendo a los Users aunque también puedo obtener un xml <br/>";
    }
}