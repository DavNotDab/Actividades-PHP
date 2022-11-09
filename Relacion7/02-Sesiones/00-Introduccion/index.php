<?php
session_start();

$variable_normal = "Soy una cadena de texto <br>";
$_SESSION['variable_persistente'] = "Hola soy una sesión activa";

echo $variable_normal;
echo $_SESSION['variable_persistente'];

//para borrarla usamos session.destroy();

phpinfo();