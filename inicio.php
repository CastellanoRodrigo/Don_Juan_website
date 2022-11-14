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
    <title>Inicio</title>
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
                <a href="*"> Inicio </a>             
                <a href="*"> Consultas </a>
                <a href="*"> Usuarios </a>
            </nav>
            <div>
                <button class="BotonSalir" href="controlador/controlador_cerrar_session.php"> Salir </button>
            </div>
        </div>
        <section>
            <div class="Espacio"></div>
            <div class="Cover2">
                <div class="ImagenParcela">
                    <h1> PARCELAS </h1>
                </div>
            </div>
        </section>
        <div>
            <div>               
                <button class="BotonAñadir" id="open"> AÑADIR CAMPAÑA </button>
                    <div id="modal_container" class="modal-container">
                        <div class="modal">
                            <h1>Descripcion de Parcela 1</h1>
                            <p> Fecha de Creacion: 12 de Enero del 2021 </p>
                            <p> Nombre de la campaña: Trigo 2022 </p>
                            <p> Cantidad de hectarias: 800 hectareas </p>
                            <p> Tipo de cultivo: Trigo </p>
                            <p> Rendimiento especulado: 360 Tons. </p>
                            <button id="close">Cerrar</button>
                        </div>
                    </div> 
                    <script src="../JavaScript/Popup.js"></script>           
                <button class="BotonModificar"> MODIFICAR CAMPAÑA </button>
                <button class="BotonEliminar"> ELIMINAR CAMPAÑA </button>
            </div>
        
            <div>
                <table align="center">
                    <tr>
                        <th><a><button id="open"> Parcela 1 </button></a></th>
                        <th><a href="DescripcionParcelas.html" target="_blank"><button id="open"> Parcela 2 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 3 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 4 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 5 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 6 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 7 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 8 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 9 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 10 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 11</button></a></th>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <h1>INFORMACION DE LAS PARCELAS</h1>
        </div>
        <section class="BarraInferior">
            <h1>Nosotros</h1>
        </section>
    </section>
    






        <!--
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

-->
</body>
</html>