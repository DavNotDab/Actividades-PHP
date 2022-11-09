<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form con input file</title>
</head>
<body>
    
    <h1>Formulario con archivo</h1>
    Nuevo Contacto: <?php echo $_POST['nombre']."<br>";?>
    Correo electronico: <?php echo $_POST['correo']."<br>";?>
    
    Fichero recibido:
    Nombre: <?= $_FILES["foto"]["name"]."<br>"?>
    Tamaño: <?= $_FILES["foto"]["size"]." bytes <br>"?>
    Temporal: <?= $_FILES["foto"]["tmp_name"]."<br>"?>
    Tipo: <?= $_FILES["foto"]["type"]."<br>"?>
    Error: <?= $_FILES["foto"]["error"]."<br>"?>

    <?php
    if (is_uploaded_file($_FILES["foto"]["tmp_name"])){
        $nombreDirectorio = "img/";
        $nombreFichero = $_FILES["foto"]["name"];

        $nombreCompleto = $nombreDirectorio.$nombreFichero;

        $tam = $_FILES["foto"]["size"];
        if ($tam >256*1024) {
            echo "<br>DEMASIADO GRANDE<br>";
            return;
        }
    
        echo "Nombre del fichero: ".$_FILES["foto"]["name"];
        echo "<br>Nombre Temporal del fichero en el server: ".$_FILES["foto"]["tmp_name"];
        //OJO el directorio subidos tiene que existir aún no sabemos como comprobar si existe
        
        $res = move_uploaded_file($_FILES ["foto"]["tmp_name"], "./img".$_FILES["foto"]["name"]);
        if ($res) {
            echo "<br>FICHERO GUARDADO";
        }
        else
            echo "<br>ERROR";
        
        if (is_file($nombreCompleto)){
            $idUnico = time();
            $nombreFichero = $idUnico."-".$nombreFichero;
        }
        move_uploaded_file($_FILES["foto"]["tmp_name"], $nombreDirectorio.$nombreFichero);
    }
    else
    print ("no se ha podido encontrar el fichero");
    ?>

</body>
</html>