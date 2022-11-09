<?php

if (isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "spanish") {
    header("Location: Spanish.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>English Document</title>
</head>
<body>
<p>Select language:</p>
<form action="Cookie_Idioma.php" method="post">
    <label for="spanish">Espa&ntilde;ol</label>
    <input type="radio" id="spanish" value="spanish" name="idioma">
    <label for="english">English</label>
    <input type="radio" id="english" value="english" name="idioma">
    <input type="submit" value="Change Language">
</form>

<hr>

<p>Hey how are you</p>

</body>
</html>
