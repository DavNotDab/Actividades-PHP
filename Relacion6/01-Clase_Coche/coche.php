<?php

class Coche{
    public function __construct(
        public string $color = "Rojo",
        public string $marca = "Ferrari",
        public string $modelo = "Aventator",
        public int $velocidad = 300,
        public int $caballos = 500,
        public int $plazas = 2){
    }

    public function acelerar() : void{
        $this->velocidad++;
    }

    public function frenar() : void{
        $this->velocidad--;
    }
}



