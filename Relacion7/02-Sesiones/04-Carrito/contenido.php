
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>El contenido de la cesta de la compra es:</h1>

    <table id="tabla">
        <tr>
            <th>Art&iacute;culo</th>
            <th>Cantidad</th>
        </tr>
        <?php
            session_start();
            if (isset($_SESSION["cesta"])) {
                $cesta = $_SESSION["cesta"];
                foreach ($cesta as $key => $value) {
                    echo "<tr>";
                    echo "<td>$key</td>";
                    echo "<td>$value</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>

    <br><br>
    <a href="carrito.php">Volver al carrito</a>

</body>
</html>
