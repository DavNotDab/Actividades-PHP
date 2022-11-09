<?php include "notas.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin de notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <hr id="sup">
    <h1>Bolet&iacute;n de notas</h1>
    <hr><br>

    <div class="tabla">
        <table>
            <tr>
                <th>Asignatura</th>
                <th>Trimestre 1</th>
                <th>Trimestre 2</th>
                <th>Trimestre 3</th>
                <th>Media</th>
            </tr>
            <tr>
                <td>Matem&aacute;ticas</td>
                <td><?php echo $mates[0];?></td>
                <td><?php echo $mates[1];?></td>
                <td><?php echo $mates[2];?></td>
                <td><?php echo $medias[0];?></td>
            </tr>
            <tr>
                <td>Lengua</td>
                <td><?php echo $lengua[0];?></td>
                <td><?php echo $lengua[1];?></td>
                <td><?php echo $lengua[2];?></td>
                <td><?php echo $medias[1];?></td>
            </tr><tr>
                <td>F&iacute;sica</td>
                <td><?php echo $fisica[0];?></td>
                <td><?php echo $fisica[1];?></td>
                <td><?php echo $fisica[2];?></td>
                <td><?php echo $medias[2];?></td>
            </tr><tr>
                <td>Lat&iacute;n</td>
                <td><?php echo $latin[0];?></td>
                <td><?php echo $latin[1];?></td>
                <td><?php echo $latin[2];?></td>
                <td><?php echo $medias[3];?></td>
            </tr>
            <tr>
                <td>Ingl&eacute;s</td>
                <td><?php echo $ingles[0];?></td>
                <td><?php echo $ingles[1];?></td>
                <td><?php echo $ingles[2];?></td>
                <td><?php echo $medias[4];?></td>
            </tr>
        </table>

        <h1>La media total es <?php echo $media_total;?></h1>
    </div>

</body>
</html>