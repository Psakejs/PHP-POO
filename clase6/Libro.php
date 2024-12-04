<?php 

class Libro
{
    public $titulo;
    public $autor;
}


class Biblioteca{
    public $libros = [];
    public function AlmacenarLibro(Libro $libro){
        $this->libros[] = $libro;
    }
    Public function MostrarLibros(){
        foreach($this->libros as $libro){
            echo "Titulo: " . $libro->titulo . "<br>";
            echo "Autor: " . $libro->autor . "<br>";
        }
    }
}


$libro1 = new Libro();
$libro1->titulo = "El principito";
$libro1->autor = "Antoine de Saint-Exupéry";
$libro2 = new Libro();
$libro2->titulo = "Cien años de soledad";
$libro2->autor = "Gabriel García Márquez";
$biblioteca = new Biblioteca();
$biblioteca->AlmacenarLibro($libro1);
$biblioteca->AlmacenarLibro($libro2);
$biblioteca->MostrarLibros();