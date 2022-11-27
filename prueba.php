<?php
session_start();
#controlamos el ingreso, si trata de acceder manualmente por url 
#lo redirige al login
if (empty($_SESSION["id"])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./menu-lateral/estilos.css">

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰ </label>
            </div>
            <div class="logo">
                <h1>Proyectos</h1>

                <!--Usuario Logueado-->
                <div class="button">
                    <div class=".text-light">
                        <?php
                        echo $_SESSION["nombre"] . " " . $_SESSION["apellido"];
                        ?>
                    </div>
                </div>

            </div>
            <nav class="menu">
                <a href="./menu-lateral/index.php">Inicio</a>
                <a href="./Nosotros.php">Nosotros</a>
                <a href="./Usuarios.php">Usuarios</a>
                <a href="">Contacto</a>
            </nav>
        </div>
    </header>
    <div class="bd-example mb0" style="height: 15vh"></div>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light fixed-top">
        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="/Don_Juan_website/altaProyectoHacienda.php">Añadir proyecto hacienda</a>
                    <a href="/Don_Juan_website/altaProyectoSiembra.php">Añadir proyecto siembra</a>
                    <a href="/Don_Juan_website/detalleHacienda.php">Añadir detalles hacienda</a>
                    <a href="/Don_Juan_website/detalleSiembra.php">Añadir detalles siembra</a>
                    <a href="#">Modificar</a>
                    <a href="#">Finalizar</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
        <div style="text-align:center;">
            <h1>INFORMACION DE LAS PARCELAS</h1><br>            

                <div class="contenedor">

                    <div class="area"> </div>
                    <div class="area"> </div>
                    <div class="area active"> </div>
                    <div class="area active"> </div>
                    <div class="area"> </div>
                    <div class="area active"> </div>
                    <div class="area active"> </div>
                    <div class="area"> </div>
                    <div class="area active"> </div>
                    <div class="area active"> </div>
                    <div class="area active"> </div>
                    <div class="area"> </div>
                    <div class="area active"> </div>
                    <div class="area active"> </div>

                </div>
           

        </div>
        </div>
        <div>

        </div>

        
</body>

</html>