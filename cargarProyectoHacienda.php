<?php
include('./modelo/conexion.php');

$nro = $_POST['nro'];
$nombre = $_POST['txtNombre'];

mysqli_query($conexion, "INSERT INTO proyectohacienda VALUES (DEFAULT, '$nro', '$nombre', 'Iniciado')");

header("Location: ./altaProyectoHacienda.php?ok");
mysqli_close($conexion);
?>