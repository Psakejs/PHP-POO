<?php 

interface personas
{
    public function getNombre();
}

class Admin implements personas
{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return "Mi nombre es: " . $this->nombre;
    }
}

$admin = new Admin('Juan');
echo $admin->getNombre();