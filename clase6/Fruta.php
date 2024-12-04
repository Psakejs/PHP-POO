<?php

class Fruta{
    public function tipo(){
        echo "Tipo de fruta: $this->tipo";
    }
}

class tipoFruta{
    public $type;
}

class FrutaVerde extends Fruta{
    Public $tipo = "Vegetal";
}

$fruta= new Fruta();
$fruta->tipoFruta=new FrutaVerde;
echo $fruta->tipoFruta->tipo();