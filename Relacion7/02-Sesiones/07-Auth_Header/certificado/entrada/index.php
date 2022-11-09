<?php

if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    header("WWW-Authenticate: Basic realm='Acceso restringido'");
    header("Status: 401 Unauthorized");
    header("HTTP/1.0 401 Unauthorized");
    echo "Autentificación incorrecta";
}
session_start();
$_SESSION['certificado'] = [
    'SSL_CLIENT_S_DN_CN' => $_SERVER['SSL_CLIENT_S_DN_CN'],
    'SSL_CLIENT_S_DN' => $_SERVER['SSL_CLIENT_S_DN'],
    'SSL_CLIENT_V_END' => $_SERVER['SSL_CLIENT_V_END'],
];
header('Location: ../secreto.php');
