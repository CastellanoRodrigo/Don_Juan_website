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
    <title>Inicio</title>
</head>
<body>
    <div class="bd-example mb0" style="height: 80vh"></div>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light fixed-top">
        <div class="text-white bg-success p-2">
           <!--Mostramos el nombre de usuario logueado--> 
            <?php
           echo $_SESSION["nombre"]." ".$_SESSION["apellido"];

            ?>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto"></div>
            <div class="offset-md-1 mr-auto text-center"></div>
            <a class="nav-item nav-link text-justify active ml-3 hover-primary" href="#">Inicio</a>
            <a class="nav-item nav-link text-justify ml-3 hover-primary" href="#">Nosotros</a>            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-justify ml-3" href="" id="navbarDropdownMenuLink" role="button">Servicios</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdoenMenuLink">
                    <a class="dropdown-item" href="#">Parcelas</a>
                    <a class="dropdown-item" href="#">Compras</a>
                    <a class="dropdown-item" href="#">Otros</a>
                </div>
            </li>
            <a class="nav-item nav-link text-justify active ml-3 hover-primary" href="controlador/controlador_cerrar_session.php">Salir</a>
        </div>
        
    </nav>
    <div class="">        
    </div>

    <form action="" class="form-inline d-flex justify-content-center flex-column flex-md-row">        
    </form>

    <p></p>
</body>
</html>