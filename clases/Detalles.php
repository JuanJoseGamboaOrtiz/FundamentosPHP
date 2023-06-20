<?php

class Detalles{

    public function __construct(public string $descripcion){
    }

    static public function hola():void{
        echo "HOla desde la clase Detalles";
    }
}   

?>