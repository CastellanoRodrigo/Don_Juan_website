<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="" src="" alt="">
    <div class="container">
        <div class="img">
        </div>
           <!-- Envio de datos seguro -->
        <div class="login-content">
            <!-- Formulario-metodo de envio-->
            <form method="post" action="">
               <!-- imagen de avatar -->
                <img src="">
                <h2>Bienvenido</h2>
                <!--llamar controlador-->
                <?php
                include "modelo/conexion.php";
                include "Controlador/controlador_login.php";
                ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Usuario</h5>
                        <input id="usuario" type="text" class="input" name="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input id="input" type="password" class="input" name="password">
                    </div>
                </div>
                <div class="view">
                    <div class="fas fa-eve verPassword" onclick="vista()" id="verPassword"></div>
                </div>
                <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">    
            </form>          
        </div>
    
</body>
</html>