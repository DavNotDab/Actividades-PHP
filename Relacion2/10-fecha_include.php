<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 10 fecha con include</title>
</head>
<body>
    
    <h1>Te muestro la fecha incluyendola desde otro archivo</h1>

    <?php include "10.1-fecha_include_funcion.php";
    
        echo "<h2>Hoy es ".fecha().".</h2>";
        
    ?>

</body>
</html>