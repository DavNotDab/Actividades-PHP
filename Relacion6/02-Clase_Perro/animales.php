<?php

include_once "perro.php";

class Gato {
    public function __construct(
        private string $tamanio,
        private string $raza,
        private string $color,
        private string $nombre) {
    }

    public function mostrar_propiedades() : void{
        echo "El tamaño del perro es: $this->tamanio, su color: $this->color, su raza: $this->raza y su nombre: $this->nombre";
    }

    public function speak() : void {
        echo "Miau, miau";
    }
}

class Conejo {
    public function __construct(
        private string $tamanio,
        private string $raza,
        private string $color,
        private string $nombre) {
    }

    public function mostrar_propiedades() : void{
        echo "El tamaño del perro es: $this->tamanio, su color: $this->color, su raza: $this->raza y su nombre: $this->nombre";
    }

    public function speak() : void {
        echo "Brrt, brrt";
    }
}

$blanquito = new Conejo("pequeño", "normal", "blanco", "Blanquito");

$persa = new Gato("grande", "persa", "blanco", "Michi");
$romano = new Gato("mediano", "romano", "marron", "César");

