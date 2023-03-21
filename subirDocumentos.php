<?php #Llammo a pie 
include('./template/Cabecera.php');
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";

/*
    LA CONEXION CON LA BD NO ES NECESARIA PORQUE GUARDA TODO EN UNA CARPETA QUE SE CREA DENTRO DEL PROYECTO
    NO SE SI HABRIA QUE MODIFICARLO Y QUE LO GUARDE EN LA BD
    EL FORMULARIO QUE TIENE LA ACCION EN PHP ES EL QUE SE LLAMA subir.php
    ACA SOLO FIGURA EL FORM CON EL BOTON PARA SELECCIONAR EL ARCHIVO A SUBIR Y EL BOTON QUE LO SUBE

    // para centrar el div use un estilo que lo puse en estilos.css que en teoria la buena practica
    dice que se centran asi
*/
?>

<center>
<h1>SUBIR ARCHIVOS</h1>
</center>
<div class="parent">

<form action="subir.php" method="post" enctype="multipart/form-data">
    <input type="file" name="archivo">
    <br><br>
    <button> Subir archivo </button>
</form>

</div>
<?php #Llammo a pie 
include('./template/pie.php');
?>