<?php 
// Incluimos el archivo que contiene la conexión a la base de datos.
// Este archivo debe crear una variable $conexion usando mysqli para conectarse a MySQL.
include 'db.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Título que se muestra en la pestaña del navegador -->
    <title>Lista de Usuarias</title>

    <!-- Enlace al archivo de estilos CSS que hace que la página se vea bonita -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- Contenedor principal donde está todo el contenido visible -->
<div class="container">

    <!-- Título de la página -->
    <h1>🌸 Lista de Usuarias 🌸</h1>

    <!-- Enlace para ir a la página donde se puede agregar una nueva usuaria -->
    <a href="agregar.php">➕ Agregar nueva usuaria</a>

    <!-- Tabla donde se van a mostrar todas las usuarias guardadas en la base de datos -->
    <table>
        <!-- Primera fila: encabezados de la tabla -->
        <tr>
            <th>Nombre</th>    <!-- Encabezado de la columna de nombre -->
            <th>Email</th>     <!-- Encabezado de la columna de email -->
            <th>Usuario</th>   <!-- Encabezado de la columna de nombre de usuario -->
            <th>Acciones</th>  <!-- Encabezado de la columna de botones de acción -->
        </tr>

        <?php
        // Ejecutamos una consulta SQL que obtiene todos los datos de la tabla "usuarios"
        $resultado = $conexion->query("SELECT * FROM usuarios");

        // Recorremos cada fila (registro) que devuelve la base de datos
        // Cada fila se guarda como un arreglo asociativo en la variable $fila
        while($fila = $resultado->fetch_assoc()):
        ?>
        
        <!-- Mostramos una fila en la tabla por cada usuaria -->
        <tr>
            <!-- Mostramos el valor del campo 'nombre' desde la base de datos -->
            <td><?= $fila['nombre'] ?></td>

            <!-- Mostramos el email de la usuaria -->
            <td><?= $fila['email'] ?></td>

            <!-- Mostramos el nombre de usuario -->
            <td><?= $fila['usuario'] ?></td>

            <!-- Acciones que se pueden hacer con esta usuaria -->
            <td>
                <!-- Enlace para editar a la usuaria. Se pasa el ID en la URL -->
                <a href="editar.php?id=<?= $fila['id'] ?>">✏️ Editar</a> | 

                <!-- Enlace para eliminar a la usuaria. También se pasa el ID -->
                <!-- Usa JavaScript para mostrar un mensaje de confirmación -->
                <a href="eliminar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Estás segura de eliminar?');">🗑️ Eliminar</a>
            </td>
        </tr>

        <?php endwhile; // Fin del bucle while ?>
    </table>

</div>
</body>
</html>
