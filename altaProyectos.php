<?php #Llammo a pie 
include('./template//Cabecera.php');?>
<!--codigo aca-->

<?php
include "Modelo/Conexion.php";
// include "Controlador/controlador_login.php";
?>
<br>
<br>
<br>
<br>
<center>
<h2>Dar de Alta Nuevo Proyecto:</h2>
</center>
<form method="post">
 <center>
 <table>
 <tr>
  <td style="height: 47px; width: 264px;">
   Nombre del proyecto:</td>
  <td style="width: 366px; height: 47px">
  
	   <input name="txtNombre" style="width: 127px; height: 30px" type="text" required />
	 </td>
 </tr>
  <td style="width: 264px; height: 69px;">
   Parcelas involucrada:</td>
   <td style="width: 366px; height: 69px;">
     		 
		 <?php
       $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');
	     //$mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
		 ?>	 
		 
		<select  name="cmbparcela" style="width: 130px; height: 28px;" required>
  
        <option name="cmbParcelas" value="" disabled selected>Seleccionar</option>
    
        <?php
  
          $query = $mysqli -> query ("SELECT * FROM parcela ");
  
          while ($valores = mysqli_fetch_array($query)) {
  
            echo '<option value="'.$valores['id_Parcela'].'">'.$valores['id_Parcela'].'</option>';
  
          }
  
        ?>
	  
	 </td>
 </tr>

 <tr>
  <td style="height: 47px; width: 264px;">
   Cantidad de hectareas:</td>
  <td style="width: 366px; height: 47px">
  
	   <input name="txtCantidadHas" style="width: 127px; height: 30px" type="text" required />
	 </td>
 </tr>

 <tr>
 <td style="width: 264px; height: 69px;">
    Estado del proyecto:
</td>
 <td style="width: 366px; height: 69px;">
     		 
          <?php
            $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');     
          ?>	 
          
         <select  name="cmbEstado" style="width: 130px; height: 28px;" required>
       
             <option name="cmbestado" value="" disabled selected>Seleccionar</option>
         
             <?php
       
               $query = $mysqli -> query ("SELECT * FROM estadoProyecto ");
       
               while ($valores = mysqli_fetch_array($query)) {
       
                 echo '<option value="'.$valores['id_EstadoProyecto'].'">'.$valores['estado'].'</option>';
       
               } 
             ?>
     
        </td>
 </tr>

 <tr>
   <td style="width: 264px; height: 69px;">
    TIPO DE PROYECTO:
  </td>
   <td style="width: 366px; height: 69px;">
     		 
		 <?php
       $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');
		 ?>	 
		 
		<select  name="cmbTipoProyecto" style="width: 130px; height: 28px;" required>
  
        <option name="cmbProyecto" value="" disabled selected>Seleccionar</option>
    
        <?php
  
          $query = $mysqli -> query ("SELECT * FROM tipoProyecto ");
  
          while ($valores = mysqli_fetch_array($query)) {
  
            echo '<option value="'.$valores['id_tipoProyecto'].'">'.$valores['tipoProyecto'].'</option>';
  
          } 
        ?>

	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   &nbsp;
   </td>
   <td style="width: 366px">
   </td>
 </tr>
 <tr>
  <td>
  </td>
  <td style="width: 264px">
   <input  type="reset" value="Cancelar" style="width: 100px; Height: 25px">
   <input type="submit" value="Crear Proyecto" style="Width: 100px; Height: 25px">  
  </td>
 </tr>
</table>
</form>
</center>

<?php
      // Controla si hubo ingreso de datos
      if (!empty ($_POST))  
      {  
       // Conecta a la base de datos
        $cn= new mysqli("localhost:3307" , "root" ,"" , "donjuandb" );
        // captura datos ingresados
        // id_proyecto no se ingresa ni se pone xq es AI en la BD
        $parcela=$_POST['cmbparcela'];
        $nombre=$_POST['txtNombre']; 
        $cantidadHas=$_POST['txtCantidadHas'];    
        $estado=$_POST['cmbEstado'];
        $tipoProyecto=$_POST['cmbTipoProyecto'];
   
        $cad = "INSERT INTO Proyectos(id_Parcela, nombreProyecto, id_TipoProyecto, cantidadHas, id_EstadoProyecto)
                VALUES ('$parcela','$nombre','$tipoProyecto','$cantidadHas','$estado')";
           // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
          // muestra mensaje que fue dado de alta
        echo "<center> El proyecto fue dado de alta con exito </center>";
        
     // cierra la conexion   
       $cn->close();
       }

?>

<?php #Llammo a pie 
include('./template/pie.php');
?>


