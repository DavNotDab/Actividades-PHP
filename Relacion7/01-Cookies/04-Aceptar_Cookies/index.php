<?php

if (isset($_POST['aceptar'])) {
    setcookie('aceptada', "si", time()+20);
    header("Location: carrito.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceptar Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        if (!isset($_COOKIE['aceptada'])) {
            echo "<div class='aceptar'>
                <h1>Acepte la pol&iacute;tica de Cookies</h1>
                <p>Esta web utiliza cookies para mejorar su experiencia de usuario. 
                Si contin&uacute;a navegando, consideramos que acepta su uso.</p>
                <form action='./carrito.php' method='post'>
                    <button type='submit' name='aceptar'>Aceptar</button>
                </form>
             </div>";
        }
    ?>

    <h3>Esto es un monton de texto s&uacute;per interesante que quieres ver pero no puedes hasta que no aceptes las cookies</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, consectetur consequatur, cumque debitis delectus dolore eos error est et excepturi ipsum, iste iusto magnam minima mollitia nesciunt nostrum odio provident quasi qui quidem quis quisquam rerum soluta tenetur unde vel voluptate. A doloribus ducimus fugiat itaque iusto maiores odio quasi sit! Consequuntur dolor et fuga illum nesciunt repudiandae sint soluta, totam voluptate voluptatem. Accusantium ad adipisci architecto beatae consequuntur cumque debitis ea eos eveniet, expedita, incidunt ipsa iste itaque magnam quaerat, quo recusandae soluta voluptates voluptatibus voluptatum. Aperiam cumque dignissimos distinctio doloremque et, ex, id laborum, molestias nisi ullam vel?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, consectetur consequatur, cumque debitis delectus dolore eos error est et excepturi ipsum, iste iusto magnam minima mollitia nesciunt nostrum odio provident quasi qui quidem quis quisquam rerum soluta tenetur unde vel voluptate. A doloribus ducimus fugiat itaque iusto maiores odio quasi sit! Consequuntur dolor et fuga illum nesciunt repudiandae sint soluta, totam voluptate voluptatem. Accusantium ad adipisci architecto beatae consequuntur cumque debitis ea eos eveniet, expedita, incidunt ipsa iste itaque magnam quaerat, quo recusandae soluta voluptates voluptatibus voluptatum. Aperiam cumque dignissimos distinctio doloremque et, ex, id laborum, molestias nisi ullam vel?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, consectetur consequatur, cumque debitis delectus dolore eos error est et excepturi ipsum, iste iusto magnam minima mollitia nesciunt nostrum odio provident quasi qui quidem quis quisquam rerum soluta tenetur unde vel voluptate. A doloribus ducimus fugiat itaque iusto maiores odio quasi sit! Consequuntur dolor et fuga illum nesciunt repudiandae sint soluta, totam voluptate voluptatem. Accusantium ad adipisci architecto beatae consequuntur cumque debitis ea eos eveniet, expedita, incidunt ipsa iste itaque magnam quaerat, quo recusandae soluta voluptates voluptatibus voluptatum. Aperiam cumque dignissimos distinctio doloremque et, ex, id laborum, molestias nisi ullam vel?</p>

</body>