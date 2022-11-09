<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idioma = $_POST["idioma"];
    setcookie("idioma", $idioma, time() + 60 * 60 * 24 * 365);

    if ($idioma == "spanish") {
        header("Location: Spanish.php");
    } else {
        header("Location: English.php");
    }

}
