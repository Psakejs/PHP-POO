<?php 

class Persona {
    protected $edad;

    public function setEdad($edad) {
        $this->edad = $edad;
    }
}

class Empleado extends Persona {
    public function mostrarEdad() {
        return "La edad es: " . $this->edad; // Acceso permitido en la clase hija
    }
}

$empleado = new Empleado();
$empleado->setEdad(25);
echo $empleado->mostrarEdad(); // Imprime: La edad es: 25

// Intentar acceder directamente a $edad causará un error
// echo $empleado->edad; // Esto genera un error
