<?php

class Perro {
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
        echo "Guau, guau";
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getRaza(): string {
        return $this->raza;
    }

    public function getTamanio(): string {
        return $this->tamanio;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setColor(string $color): void{
        $this->color = $color;
    }

    public function setRaza(string $raza): void{
        $this->raza = $raza;
    }

    public function setTamanio(string $tamanio): void{
        $this->tamanio = $tamanio;
    }

    public function setNombre(string $nombre): void{
        try {
            if (gettype($nombre) != "string") throw new Exception("El nombre debe ser un string");
            if (strlen($nombre) > 21) throw new Exception("El nombre es demasiado largo");
            $this->nombre = $nombre;
        }
        catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


}