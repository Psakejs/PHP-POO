<?php
// Clase abstracta
abstract class Animal {
    // Método abstracto (debe implementarse en las clases hijas)
    abstract public function hacerSonido();

    // Método concreto (con implementación)
    public function dormir() {
        echo "Zzz...\n";
    }
}

// Clase hija
class Perro extends Animal {
    // Implementa el método abstracto
    public function hacerSonido() {
        echo "Guau guau\n";
    }
}

// Clase hija
class Gato extends Animal {
    // Implementa el método abstracto
    public function hacerSonido() {
        echo "Miau miau\n";
    }
}

// Crear objetos
$perro = new Perro();
$perro->hacerSonido(); // Salida: Guau guau
$perro->dormir();      // Salida: Zzz...

$gato = new Gato();
$gato->hacerSonido();  // Salida: Miau miau
$gato->dormir();       // Salida: Zzz...
?>
