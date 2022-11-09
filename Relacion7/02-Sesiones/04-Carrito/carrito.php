<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (isset($_POST["add"])) {
        if ($_POST["producto"]) {
            $producto = $_POST["producto"];
            $cantidad = $_POST["cantidad"];
            if (isset($_SESSION["cesta"])) {
                $cesta = $_SESSION["cesta"];
                if (isset($cesta[$producto])) {
                    $cesta[$producto] += $cantidad;
                } else {
                    $cesta[$producto] = $cantidad;
                }
            } else {
                $cesta = [$producto => $cantidad];
            }
            $_SESSION["cesta"] = $cesta;
        }
    }
    else if (isset($_POST["comprar"])) {
        echo "<h1>Compra realizada</h1>";
        header("Location: contenido.php");
    }
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenido">
        <h2>Carrito de la compra</h2>
        <h1>Introduce los productos que quieras comprar</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <div class="producto">
                <section id="nombre_producto">
                    <label for="producto">Dime el producto</label>
                    <input type="text" name="producto" id="producto">
                </section>
                <section id="cantidad_producto">
                    <label for="cantidad">Cu&aacute;ntas unidades</label>
                    <select name="cantidad" id="cantidad">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </section>
            </div>
            <div class="submits">
                <input type="submit" value="Añadir a la cesta" name="add" id="add">
                <input type="submit" value="Comprar" name="comprar" id="comprar">
            </div>
        </form>
    </div>

</body>
</html>