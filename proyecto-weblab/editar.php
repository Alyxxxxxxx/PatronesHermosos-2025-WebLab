
<?php
// Incluimos el archivo de conexión a la base de datos
// Este archivo contiene las variables necesarias para conectarse a MySQL
include 'db.php';

// Obtenemos el ID de la usuaria que queremos editar, desde la URL (GET)
// Por ejemplo, si la URL es editar.php?id=3, entonces $id será 3
$id = $_GET['id'];

// Consultamos la base de datos para obtener los datos actuales de la usuaria
// Así los mostramos en el formulario para que se puedan modificar
$resultado = $conexion->query("SELECT * FROM usuarios WHERE id=$id");

// Guardamos los datos de la usuaria en una variable como un arreglo asociativo
// Esto nos permite acceder a sus campos como $usuario['nombre'], etc.
$usuario = $resultado->fetch_assoc();

// Si el formulario fue enviado (es decir, si se hizo clic en "Actualizar")
if ($_POST) {
    // Recibimos los nuevos datos escritos por la usuaria en el formulario
    $nombre = $_POST['nombre'];        // El nuevo nombre que escribió la usuaria
    $email = $_POST['email'];          // El nuevo email que escribió
    $usuario_txt = $_POST['usuario'];  // El nuevo nombre de usuario

    // Ejecutamos una consulta SQL para actualizar los datos en la base
    $conexion->query("UPDATE usuarios 
                      SET nombre='$nombre', 
                          email='$email', 
                          usuario='$usuario_txt' 
                      WHERE id=$id");

    // Después de guardar los cambios, redirigimos a la página principal
    // Así la usuaria puede ver la lista de usuarias actualizada
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuaria</title> <!-- Título que aparece en la pestaña del navegador -->

    <!-- Enlace a la hoja de estilos CSS que hace que la página se vea bonita -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- Contenedor principal que agrupa todo el contenido en un recuadro bonito -->
<div class="container">

    <!-- Título en la parte superior del formulario -->
    <h1>✏️ Editar Usuaria</h1>

    <!-- Formulario para actualizar los datos de la usuaria -->
    <!-- method="POST" significa que los datos se enviarán ocultos y seguros -->
    <form method="POST">

        <!-- Campo de texto para el nombre -->
        <!-- El atributo name="nombre" es la clave que usaremos en PHP -->
        <!-- value= $usuario['nombre'] muestra el valor actual desde la base -->
        <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required>

        <!-- Campo de texto para el email -->
        <input type="email" name="email" value="<?= $usuario['email'] ?>" required>

        <!-- Campo de texto para el nombre de usuario -->
        <input type="text" name="usuario" value="<?= $usuario['usuario'] ?>" required>

        <!-- Botón que envía el formulario para guardar los cambios -->
        <input type="submit" value="Actualizar">
    </form>

    <!-- 🔙 Enlace para volver a la página principal sin hacer cambios -->
    <a href="index.php">← Volver</a>
</div>

</body>
</html>
