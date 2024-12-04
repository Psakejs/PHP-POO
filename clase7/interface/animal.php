<?php

// Definición de la interfaz
interface Animal {
    public function hacerSonido(); // Método sin implementación
    public function moverse();
}

// Clase que implementa la interfaz
class Perro implements Animal {
    public function hacerSonido() {
        echo "Guau Guau";
    }

    public function moverse() {
        echo "El perro corre";
    }
}

// Clase que implementa la interfaz
class Gato implements Animal {
    public function hacerSonido() {
        echo "Miau";
    }

    public function moverse() {
        echo "El gato camina sigilosamente";
    }
}

// Usar polimorfismo con la interfaz
function describirAnimal(Animal $animal) {
    $animal->hacerSonido();
    echo " y ";
    $animal->moverse();
    echo ".\n";
}

// Ejemplo
$perro = new Perro();
$gato = new Gato();

describirAnimal($perro); // Salida: Guau Guau y El perro corre.
describirAnimal($gato);  // Salida: Miau y El gato camina sigilosamente.
