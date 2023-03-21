        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->             
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="Css/estiloLogin.css">
                <title>Login GAFA</title>
            </head>
            <body>
                <form method="post" action="">
                <?php            
                    include('./Modelo/Conexion.php');
                    include "Controlador/controlador_login.php";
                ?>
                <section class="form-login">
                    <h5>Inicio de sesion</h5>
                    <input class="cajas" type="text" name="usuario" value="" placeholder="ingresar usuario" required>
                    <input class="cajas" type="password" name="password" value="" placeholder="ingresar password" required>
                    <input class="btn" type="submit" name="btningresar" value="Ingresar">

                </section>   
                </form>         
            </body>
        </html>