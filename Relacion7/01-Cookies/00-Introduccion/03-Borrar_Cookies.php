<?php

/*if (isset($_COOKIE["micookie"])) {
    unset($_COOKIE["micookie"]);
    setcookie("micookie", "", time() - 100);
}*/

if (count($_COOKIE) > 0) {
    foreach ($_COOKIE as $key => $value) {
        unset($_COOKIE[$key]);
        setcookie($key, "", time() - 100);
    }
}

header("Location:02-Ver_Cookies.php");