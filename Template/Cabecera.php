<?php
session_start();
#controlamos el ingreso, si trata de acceder manualmente por url 
#lo redirige al login
if (empty($_SESSION["id"])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/Parcelas.css">
    
</head>
<body>
    <!--
        <div class="bd-example mb0" style="height: 80vh"></div>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light fixed-top">
        <div class="text-white bg-success p-2">
           Mostramos el nombre de usuario logueado
            <?php
           echo $_SESSION["nombre"]." ".$_SESSION["apellido"];
            ?>
        </div>
    -->
    <section class="home">
        <div class="BarraNavegacion">
            <img src="imagenes/Gafa.jpg">
            <nav>
                <a href="inicio.php"> Inicio </a>             
                <a href="Consultas.php"> Consultas </a>
                <a href="Usuarios.php"> Usuarios </a>
            </nav>
            <div>
                <button class="BotonSalir" href="controlador/controlador_cerrar_session.php"> Salir </button>
            </div>
            </div>

           
        
