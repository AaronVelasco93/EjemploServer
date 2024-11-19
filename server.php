<?php
// Conexión a la base de datos
//credenciales de forma Local
$host = 'localhost:3308'; // Cambia si tu servidor es diferente
$user = 'root'; // Usuario de tu base de datos
$password = '123456'; // Contraseña de tu base de datos
$database = 'ejemplo_db'; // Nombre de la base de datos

// Server Linux
/*
$host = 'localhost:3306'; // Cambia si tu servidor es diferente
$user = 'huronmarron'; // Usuario de tu base de datos
$password = '123456789'; // Contraseña de tu base de datos
$database = 'prueba_bd'; // Nombre de la base de datos
*/

// Crear conexión
$conexion = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para obtener los datos
$query = "SELECT * FROM ejemplo_tabla";
$result = $conexion->query($query);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    echo "<h1>Hola mundo, registro de base de datos</h1>";
    echo "<table border='1' style='border-collapse: collapse; width: 80%; margin: 20px auto;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Edad</th>";
    echo "<th>Ciudad</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Recorrer los resultados y mostrarlos en la tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['edad'] . "</td>";
        echo "<td>" . $row['ciudad'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p style='text-align: center;'>No hay registros en la tabla.</p>";
}

// Cerrar conexión
$conexion->close();
?>
