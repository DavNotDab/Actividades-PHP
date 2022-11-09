<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 7 calcular primo</title>
</head>
<body>
    
    <h1>Funci&oacute;n calcular primo</h1>

    <?php
    
        function primo($n1) {
            for ($i = 2; $i < $n1; $i++) {
                if ($n1%$i == 0)
                    return "no es primo";
            }
            return "es primo";
        }

        if (empty($_GET["n1"]))
            echo "<h2>Introduce un número.</h2>";  
        else {
            $n1 = $_GET["n1"];
            echo "<h2>Tu número es $n1</h2>";

            if (!is_numeric($n1)) 
                echo "<h1>Introduce UN NÚMERO</h1>";
            else{
                echo "<h2>El número $n1 ".primo($n1)."</h2>";

            }
        }
        echo phpinfo();

    ?>

</body>
</html>