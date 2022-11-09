<?php include "sanear_formulario.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    
    <?php 
        if (isset($err))
            echo "<h1>Los datos no son correctos</h1>";
    ?>

    <form action =  "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value = "<?php if(isset($nombre_s) && $nombre_s)echo $nombre;?>">
        </p>
        <p>
            <label for="correo">Correo</label>
            <input type="text" name="correo" value = "<?php if(isset($correo_s) && $correo_s)echo strval($correo_s);?>">
        </p>
        <p>
            <label for="edad">Edad</label>
            <input type="text" name="edad" value = "<?php if(isset($edad_s) && $edad_s)echo strval($edad_s);?>">
        </p>
        <p>
            <label for="web">Web</label>
            <input type="text" name="web" value = "<?php if(isset($web_s) && $web_s)echo strval($web_s);?>">
        </p>
        
        <button name="submit">Enviar</button>
    </form>

</body>
</html>