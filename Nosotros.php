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
                <h1>Menú</h1>

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
                <a href="./inicio.php">Inicio</a>
                <a href="./Nosotros.php">Nosotros</a>
                <a href="./Usuarios.php">Usuarios</a>
                <a href="">Contacto</a>
            </nav>
        </div>
        <title>Nosotros</title>
    </header>




    </body>

</html>