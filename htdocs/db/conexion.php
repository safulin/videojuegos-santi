<?php
$conexion = mysqli_connect("sql112.infinityfree.com", "if0_39078091", "9k7Q5OH50W", "if0_39078091_videojuegos");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
mysqli_set_charset($conexion, "utf8");
?>
