<?php

session_start();

echo $variable_normal."<br>"; //no se puede acceder a una variable normal

echo $_SESSION['variable_persistente'];