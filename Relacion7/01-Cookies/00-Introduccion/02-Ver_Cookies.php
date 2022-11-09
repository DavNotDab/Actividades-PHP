<?php

if (isset($_COOKIE["micookie"])) {
    echo "<h1> Mi cookie: " . $_COOKIE["micookie"] . "</h1>";
} else {
    echo "No existe la cookie";
}
if (isset($_COOKIE["unyear"])) {
    echo "<h1> Un año en segundos: " . $_COOKIE["unyear"] . "</h1>";
} else {
    echo "No existe la cookie";
}
?>
<a href="03-Borrar_Cookies.php">Borrar las cookies</a>
