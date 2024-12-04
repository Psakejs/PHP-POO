<?php 

class Persona {
    private $nombre; // Solo accesible en esta clase
    protected $edad; // Accesible en esta clase y en las clases hijas

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function mostrarDatos() {
        return "Nombre: $this->nombre, Edad: $this->edad";
    }
}

class Estudiante extends Persona {
    public function mostrarEdad() {
        return "Edad del estudiante: $this->edad"; // Funciona porque es protected
    }

    // Esto generaría un error porque $nombre es private
    // public function mostrarNombre() {
    //     return $this->nombre;
    // }
}

$estudiante = new Estudiante();
$estudiante->setNombre("Carlos");
$estudiante->setEdad(20);

// $estudiante->nombre = "Carlos"; // Esto genera un error (private)
echo $estudiante->mostrarDatos(); // Imprime: Nombre: Carlos, Edad: 20
echo $estudiante->mostrarEdad(); // Imprime: Edad del estudiante: 20
