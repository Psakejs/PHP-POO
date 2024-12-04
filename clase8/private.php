<?php 
class Persona {
    private $nombre;

    public function setNombre($nombre) {
        $this->nombre = $nombre; // Acceso permitido dentro de la clase
    }

    public function getNombre() {
        return $this->nombre; // Acceso permitido dentro de la clase
    }
}

$persona = new Persona();
$persona->setNombre("Juan");
// Intentar acceder a $nombre directamente causará un error
// echo $persona->nombre; // Esto genera un error
echo $persona->getNombre(); // Funciona correctamente: imprime "Juan"
