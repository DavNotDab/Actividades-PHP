<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_COOKIE['contador']){
        unset($_COOKIE['contador']);
        setcookie('contador','',time()-100);
    }
    header('Location:carrito.php');

}

if(isset($_COOKIE['contador'])){
    $contador = (int)$_COOKIE['contador'];

    echo ($_COOKIE['contador'] == 1) ? "<h1>Bienvenido por primera vez </h1>" : "<h1>Visitas: $contador </h1>";

    $contador ++;
    setcookie("contador", $contador);
}
else{
    echo "<h1>Bienvenido por primera vez </h1>";
    setcookie("contador", 1);
}

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitas</title>
</head>
<body>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <button type="submit">Reiniciar visitas</button>
    </form>

</body>
</html>
