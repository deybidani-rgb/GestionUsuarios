<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
</head>
<body>

<h2>Lista de Usuarios</h2>

<a href="crear.php">➕ Crear Usuario</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Cédula</th>
    <th>Teléfono</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conexion->query("SELECT * FROM usuarios");

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
        <td>{$fila['id']}</td>
        <td>{$fila['nombre']}</td>
        <td>{$fila['cedula']}</td>
        <td>{$fila['telefono']}</td>
        <td>
            <a href='editar.php?id={$fila['id']}'>Editar</a>
            <a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>


</table>

</body>
</html>