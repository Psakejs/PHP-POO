<?php

class Vehiculo{
    public $nombre;

    public function describirNombre(){
        echo "El nombre del vehiculo es: ".$this->nombre;
    }
}

class Auto extends Vehiculo
{
    Public $tipoCombustible;

    public function describirCombustible(){
        echo "El tipo de combustible es: ".$this->tipoCombustible;
    }
}



$Auto = new Auto();
$Auto->nombre = "Ford";
$Auto->tipoCombustible = "Diesel";
$Auto->describirNombre();
$Auto->describirCombustible();
