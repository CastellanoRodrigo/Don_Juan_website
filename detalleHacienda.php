<?php #Llammo a pie 
include('./template//Cabecera.php');?>
<!--codigo aca-->

<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>
<center>
<h2>Asignar detalles al proyecto de Hacienda:</h2>
<br>
<br>
<br>
<br>
</center>
<form method="post">
 <center>

 <table style= "background: lightblue"; >
 <tr>
  <td style="height: 47px; width: 381px;">
   Nombre del proyecto</td>
  <td style="width: 366px; height: 47px"> 
	   &nbsp;<select  name="cmbNombre" style="height: 30px; width: 127px;" required>
  
        <option name="cmbnombre" value="" disabled selected >Seleccionar</option>

	   <?php
        $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');				 
         
          $query = $mysqli -> query ("SELECT * FROM Proyectos
                                    WHERE id_TipoProyecto = '1'");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['id_Proyecto'].'">'.$valores['nombreProyecto'].'</option>';
          } 
        ?>
        
	 <td/>	   	 
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Fecha de inicio:</td>
  <td style="width: 381px; height: 47px;">  
	   <input name="txtFechaInicio" type="date" class="auto-style1" style="height: 30px; width: 127px" required />
	</td>
 </tr>
 <tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Cantidad de cabezas:</td>
  <td style="width: 366px; height: 47px;">   
         <input name="txtCabezas" type="text" class="auto-style1" style="height: 30px; width: 127px" required />		  
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
 <!-- esto se hace en el ataProyecto para poder llamar mejor la info en mostrar las parcelas
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
   Categoria:</td>
   <td style="width: 366px; height: 47px"> 
	   &nbsp;<select  name="cmbCategoria" style="height: 30px; width: 127px;" required> 
        <option name="cmbcategoria" value="" disabled selected >Seleccionar</option>
	   <?php
        $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');			 
	 
          $query = $mysqli -> query ("SELECT * FROM Categoria ");
  
          while ($valores = mysqli_fetch_array($query)) {  
            echo '<option value="'.$valores['id_Categoria'].'">'.$valores['nombreCategoria'].'</option>'; 
          } 
        ?>       
	 </td>	  

 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Fecha de cierre aproximado:</td>
  <td style="width: 381px; height: 47px;">  
	   <input name="txtFechaCierre" type="date" class="auto-style1" style="height: 30px; width: 127px" required/>
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

     $nombre=$_POST['cmbNombre']; 
     $fechainicio=$_POST['txtFechaInicio'];
     $fechacierre=$_POST['txtFechaCierre'];
     //$cantHectareas=$_POST['txtHectareas']; esto iba antes ahora se hace en el altaProyecto.php
     $cabezas=$_POST['txtCabezas']; 
     $categoria=$_POST['cmbCategoria'];
     $inversion=$_POST['txtInversion'];	 
	 		
     //PONER BIEN NOMBRE DE LAS COLUMNAS Y NOMBRE DE TABLAS XQ SE ME ENQUILOMBO TODO
        $cad = "INSERT INTO detalleHacienda(id_Proyecto, fechaInicio, fechaCierre, CantidadCabezas, id_Categoria, inversion) 
                VALUES ('$nombre','$fechainicio','$fechacierre','$cabezas','$categoria','$inversion')";
                           
        // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje que fue dado de alta

       echo " El detalle fue dado de alta con exito ";
     
  // cierra la conexion   
 $cn->close();
}
?>


<?php #Llammo a pie 
include('./template/pie.php');?>
