<?php
include("conexion.php");

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
$usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>

<h2>Editar Usuario</h2>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

    Nombre: <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>"><br>
    Cédula: <input type="text" name="cedula" value="<?php echo $usuario['cedula']; ?>"><br>
    Teléfono: <input type="text" name="telefono" value="<?php echo $usuario['telefono']; ?>"><br>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>