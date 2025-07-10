<?php 
// Incluye el archivo 'db.php' que contiene la conexión a la base de datos
include 'db.php'; 

// Obtiene el valor del parámetro 'id' enviado por la URL mediante el método GET
$id = $_GET['id'];

// Ejecuta una consulta SQL que elimina al usuario con el ID especificado
$conexion->query("DELETE FROM usuarios WHERE id=$id");

// Redirige al usuario a la página principal después de eliminar el registro
header("Location: index.php");
?>