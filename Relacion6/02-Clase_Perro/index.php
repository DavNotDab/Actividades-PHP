<?php

try {
    $archivo = "perro.php";
    if (file_exists($archivo)) {
        include $archivo;
    } else {
        throw new Exception("No se encuentra el archivo");
    }
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$labrador = new Perro("grande", "labrador", "marrón", "Toby");
$labrador->mostrar_propiedades();
$labrador->speak();

$caniche = new Perro("pequeño", "caniche", "blanco", "Pepa");
$caniche->mostrar_propiedades();
$caniche->speak();


