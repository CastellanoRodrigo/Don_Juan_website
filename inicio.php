<?php
session_start();

cli_set_process_title<!DOCTYPE html>
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
            <?php
           echo $_SESSION["nombre"]." ".$_SESSION["apellido"];
            ?>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        </div>

    </nav>
    <div class="">        
    </div>

    <form action="" class="form-inline d-flex justify-content-center flex-column flex-md-row">        
    </form>

    <p></p>
</body>
</html>