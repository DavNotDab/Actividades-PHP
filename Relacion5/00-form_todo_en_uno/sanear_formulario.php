<?php 
    
    function FILTER_VALIDATE_STRING($cadena) {
        if (strlen($cadena) < 4)
            return false;

        if (preg_match("[^a-zA-Z]", $cadena))
            return false;
        
        if (!ctype_upper($cadena[0]))
            return false;

        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST["correo"];
        $correo_s = filter_var($correo, FILTER_SANITIZE_EMAIL);
        !filter_var($correo_s, FILTER_VALIDATE_EMAIL) ? $correo_s = false : $correo_s = true;

        $nombre = $_POST["nombre"];
        $nombre_s = filter_var($nombre, FILTER_SANITIZE_STRING);
        !FILTER_VALIDATE_STRING($nombre_s) ? $nombre_s = false : $nombre_s = true;

        $edad = $_POST["edad"];
        $edad_s = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
        !filter_var($edad_s, FILTER_VALIDATE_INT) ? $edad_s = false : $edad_s = true;

        $web = $_POST["web"];
        $web_s = filter_var($web, FILTER_SANITIZE_URL);
        !filter_var($web_s, FILTER_VALIDATE_URL) ? $web_s = false : $web_s = true;

        if (!$correo_s || !$nombre_s || !$edad_s || !$web_s) 
            $err = true;
        else    
            header("Location: correcto.html");

    }
?>
