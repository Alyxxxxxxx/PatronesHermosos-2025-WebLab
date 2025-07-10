<?php
// Incluye el archivo de conexión a la base de datos
include 'db.php';

// Verifica si el formulario fue enviado mediante el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los valores enviados por el formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];

    // Encripta la contraseña usando el algoritmo por defecto (bcrypt)
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepara una consulta segura para evitar inyecciones SQL
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email, usuario, password) VALUES (?, ?, ?, ?)");

    // Asocia los valores a los marcadores de posición (bind parameters)
    $stmt->bind_param("ssss", $nombre, $email, $usuario, $password);

    // Ejecuta la consulta
    $stmt->execute();

    // Cierra la consulta preparada
    $stmt->close();

    // Redirige al usuario a la página principal
    header("Location: index.php");
    exit(); // Detiene la ejecución después de redirigir
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Título de la pestaña del navegador -->
    <title>Agregar Usuaria</title>

    <!-- Enlace a hoja de estilos externa -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<!-- Contenedor principal -->
<div class="container">
    <!-- Título de la página -->
    <h1>➕ Nueva Usuaria</h1>

    <!-- Formulario HTML que se envía por POST al mismo archivo -->
    <form method="POST">
        <!-- Campo para nombre -->
        <input type="text" name="nombre" placeholder="Nombre" required>

        <!-- Campo para email -->
        <input type="email" name="email" placeholder="Correo" required>

        <!-- Campo para nombre de usuario -->
        <input type="text" name="usuario" placeholder="Usuario" required>

        <!-- Campo para contraseña -->
        <input type="password" name="password" placeholder="Contraseña" required>

        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Guardar">
    </form>

    <!-- Enlace para regresar -->
    <a href="index.php">← Volver</a>
</div>
</body>
</html>