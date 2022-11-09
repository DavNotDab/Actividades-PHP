<?php

    $tam = $_FILES["foto"]["size"];
    if ($tam >256*1024) {
        echo "<br>DEMASIADO GRANDE<br>";
        return;
    }

    echo "Nombre del fichero: ".$_FILES["foto"]["name"];
    echo "<br>Nombre Temporal del fichero en el server: ".$_FILES["foto"]["tmp_name"];
    //OJO el directorio subidos tiene que existir aún no sabemos como comprobar si existe
    
    $res = move_uploaded_file($_FILES ["foto"]["tmp_name"], "subidos/".$_FILES["foto"]["name"]);
    if ($res) {
        echo "<br>FICHERO GUARDADO";
    }
    else
        echo "<br>ERROR";