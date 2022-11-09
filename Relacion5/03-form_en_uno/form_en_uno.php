<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST["usuario"] === "usuario" and $_POST["clave"] === "1234"){
        header("Location: principal.html");
    }else{
        $err = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en uno.</title>
</head>
<body>
    <?php if(isset($err)){
        echo "<p> Revise usuario y contraseña: </p>";
    }?>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
        <label for = "usuario"> Usuario </label> <br>
        <input value = "<?php if(isset($usuario))echo strval($usuario);?>"
        id = "usuario" name = "usuario" type = "text"> <br>

        <label for="clave">Clave</label> <br>
        <input type="password" name="clave" id="clave"> <br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>