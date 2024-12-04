<?php

abstract class Forma {
    // Método abstracto: define "qué hace", pero no "cómo lo hace"
    abstract public function calcularArea();
}

class Cuadrado extends Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends Forma {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * $this->radio * $this->radio;
    }
}

// Uso
$cuadrado = new Cuadrado(4);
echo "Área del cuadrado: " . $cuadrado->calcularArea() . "\n";

$circulo = new Circulo(3);
echo "Área del círculo: " . $circulo->calcularArea() . "\n";
