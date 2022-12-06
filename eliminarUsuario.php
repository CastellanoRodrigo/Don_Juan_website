
<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?><?php
// controla si $_Post esta vacio
if (!empty ($_POST))  
   {
    
    // Conecta a la base de datos
    $cn= new mysqli("localhost", "root", "", "sistema_dj");
   // Captura usuario a eliminar 
     $seleccion=$_REQUEST['cmbEliminar'];
    //Ejecuta sentencia en sql para eliminar de la tabla usuarios el seleccionado
    $registros= $cn->query("DELETE FROM usuarios WHERE nombre='$seleccion'");
    // muestra el nombre del usuario y un mensaje de eliminacion
    echo $seleccion;
    echo " Usuario eliminado";
   // Cierra conexion
    $cn->close();       
   }
?>
	 
   <?php
    echo"<center>";
    // Conecta a la base de datos
    $cn= new mysqli("localhost", "root", "", "sistema_dj");
    // selecciona el usuario de la tabla
    $registros= $cn->query("SELECT * FROM usuarios");
     // Define formulario
    echo "<form name=datos action=eliminarUsuario.php  method=post>";
    echo "<h1> Eliminar usuario de la base de datos </h1>";

    // Define lista desplegable
    echo "<select name=cmbEliminar size=1>";
    echo "<option disabled selected>Seleccione un usuario</option>";
    //echo "<option>Seleccione un usuario</option>";
    // Repetitiva para cragar los productos en la lista desplegable 
    while ($myrow=$registros->fetch_array())
    { // Define item de la lista
      echo "<option>";
      // carga el nombre del usuario como item de la lista
      echo "$myrow[nombre]<br>";
      echo "</option>";
     } 
    // Final de la lista desplegable
    echo"</select>";

    // Define boton para enviar formulario---> realiza la eliminacion
    echo "<input type=submit value=Eliminar>";

    // Define boton para cancelar formulario -----> cancela la accion 
    echo "<input type=reset value=cancelar>";

    // Cierra conexion
    $cn->close();

    echo "</center>";
?>
