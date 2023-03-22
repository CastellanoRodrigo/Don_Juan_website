<?php #Llammo a pie 
include('./template//Cabecera.php');?>
<!--codigo aca-->

<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>
<center>
<h2>Asignar detalles Proyecto de Siembra:</h2>
<br>
<br>
<br>
<br>

</center>
<form method="post">
 <center>
 <table style= "background: lightgreen";>
 <tr>
  <td style="height: 47px; width: 381px;">
   Nombre del proyecto:</td>
  <td style="width: 381px; height: 47px;"> 
	   &nbsp;<select  name="cmbNombre" style="height: 30px; width: 127px;" required> 
        <option name="cmbnombre" value="" disabled selected>Seleccionar</option>

	   <?php
	      $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');	   

          $query = $mysqli -> query ("SELECT * FROM Proyectos
                                    WHERE id_TipoProyecto = '2'");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['id_Proyecto'].'">'.$valores['nombreProyecto'].'</option>';
          } 
  
        ?>
	   	   
	 </td>
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Fecha de inicio:</td>
  <td style="width: 381px; height: 47px;">   
	   <input name="txtFechaInicio" type="date" class="auto-style1" style="height: 30px; width: 127px" required/>
	</td>
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Cultivo:</td>
   <td style="width: 381px; height: 47px;">
    		 
		 <?php
       $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');
	 
		 ?>	 
		 
		<select  name="cmbCultivo" style="height: 30px; width: 127px;" required>
  
        <option name="cmbCultivos" value="" disabled selected>Seleccionar</option>
  
        <?php
  
          $query = $mysqli -> query ("SELECT * FROM Cultivos ");
  
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['id_Cultivo'].'">'.$valores['nombreCultivo'].'</option>'; 
          }
  
        ?>
	  
	 </td>
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Inversion inicial:</td>
   <td style="width: 381px; height: 47px;">
     <form method="post">				        
	   <input name="txtInversion" type="text" class="auto-style1" style="height: 30px; width: 127px" required />                               
	 </td>
 </tr>
 <!-- ESTO AL IGUAL QUE EN HACIENDA SE HACE DESDE ALTAPROYECTOS.PHP
 <tr>
  <td style="width: 381px; height: 47px;">
   Cantidad Hectareas utilizadas:</td>
  <td style="width: 381px; height: 47px;">   
	   <input name="txtHectareas" type="text" class="auto-style1" style="height: 30px; width: 127px" required />
	</td>
 </tr>
  -->
<tr>
  <td style="width: 381px; height: 47px;">
   Rinde Especulado:</td>
  <td style="width: 381px; height: 47px;">   
	   <input name="txtRinde" type="text" class="auto-style1" style="height: 30px; width: 127px" required />
	</td>
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Fecha de cierre aproximado:</td>
  <td style="width: 381px; height: 47px;">  
	   <input name="txtFechaCierre" type="date" class="auto-style1" style="height: 30px; width: 127px" required />
	</td>
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   &nbsp;
   </td>
   <td style="width: 381px; height: 47px;">
   </td>
 </tr>
 <tr>
  <td>
  </td>
  <td style="width: 381px; height: 47px;">
   <input  type="reset" value="Cancelar" style="Width: 100px; Height: 40px">
   <input type="submit" value="Cargar detalle" style="Width: 110px; Height: 40px"> 
  </td>
 </tr>
</table>
</form>
</center>

<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
      $cn= new mysqli("localhost:3307" , "root" ,"" , "donjuandb" );
     // captura datos ingresados

     $nombre=$_POST['cmbNombre']; 
     $fechainicio=$_POST['txtFechaInicio'];
     $cultivo=$_POST['cmbCultivo']; 
     $inversion=$_POST['txtInversion'];
     $rinde=$_POST['txtRinde'];    
     //$cantHectareas=$_POST['txtHectareas']; se da desde altaproyectos.php
     $fechacierre=$_POST['txtFechaCierre'];

     $cad = "INSERT INTO detalleSiembra(id_Proyecto, fechaInicio, fechaCierre, id_Cultivo, rindeEsperadoHas, inversion)
             VALUES ('$nombre','$fechainicio','$fechacierre','$cultivo','$rinde','$inversion')";
                           
        // Ejecuta sentencia INSERT
      $result = $cn->query($cad);
       // muestra mensaje que fue dado de alta
      echo "El proyecto fue dado de alta con exito";
     
  // cierra la conexion   
     $cn->close();
    }
?>

<?php #Llammo a pie 
include('./template/pie.php');
?>