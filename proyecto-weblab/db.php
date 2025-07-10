<?php
// Crea una nueva conexión a la base de datos utilizando la clase mysqli
// Parámetros: servidor ("localhost"), usuario ("root"), contraseña (""), nombre de la base de datos ("mi_mundo")
$conexion = new mysqli("localhost", "root", "", "mi_mundo");

// Verifica si ocurrió un error al intentar conectarse
if ($conexion->connect_error) {
    // Si hay un error, detiene la ejecución del script y muestra un mensaje de error
    die("Conexión fallida: " . $conexion->connect_error);
}
?>