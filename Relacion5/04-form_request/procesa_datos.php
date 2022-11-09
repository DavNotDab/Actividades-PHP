<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $base = $_REQUEST["base"];
        $altura = $_REQUEST["altura"];
        $area = ($base*$altura)/2;

        echo "El área del triángulo es $area";

        $N=$altura;

        for ($i=1;$i<=$N;$i++){
            for ($j=1;$j<=$i;$j++){
                print "* ";
            }
            print "<BR>\n ";
        }

    }
    else
        echo "ERROR, MÉTODO DE ENVIO INCORRECTO";
