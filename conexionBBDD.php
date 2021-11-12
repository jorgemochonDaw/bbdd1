<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$conexion = mysqli_connect($servidor, $usuario, $password) or die("error de conexión");
mysqli_select_db($conexion, "ropa");

if (mysqli_connect_errno()) {
    printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
    exit();
}

