<!DOCTYPE html>
            <html lang="en">
            <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <title>Asignar compras</title>
            </head>

<?php #Llammo a pie 
include('./template//Cabecera.php');?>
<!--codigo aca-->

<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>
<center>
<h2>Asignar Compra:</h2>
<br>
<br>
<br>
<br>
</center>
<form method="post">
 <center>

 <table style= "background: lightblue"; >
 <tr>
  <td style="width: 381px; height: 47px;">
   Compras</td>
   <td style="width: 366px; height: 47px"> 
	   &nbsp;<select  name="cmbNroCompra" style="height: 30px; width: 127px;" required> 
        <option name="cmbnrocompra" value="" disabled selected >Seleccionar</option>
	   <?php
        $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');			 
	 
          $query = $mysqli -> query ("SELECT * FROM Compras ");
  
          while ($valores = mysqli_fetch_array($query)) {  
            echo '<option value="'.$valores['id_Compras'].'">'.$valores['nroFactura'].'</option>'; 
          } 
        ?>       
	 </td>	  
 </tr>

 <tr>
  <td style="width: 381px; height: 47px;">
   ACA VAN LOS RADDIO BUTTON:</td>
  <td style="width: 381px; height: 47px;">  
	   <input type="radio" value="habilitado" name="rdbutton" style="height: 30px; width: 127px"/>
     Asignar
     <input type="radio" value= "deshabilitado" name="rdbutton" style="height: 30px; width: 127px"/>
     General
	</td>
              <script>
                  $('input[name="rdbutton"]').on('change', function()		
	                  {
	                    $('select[name="cmbNombre"]').attr('disabled',this.Value!="habilitado")		
                  	});
               </script>
 </tr>

 <tr>
  <td style="height: 47px; width: 381px;">
   Nombre del proyecto</td>
  <td style="width: 366px; height: 47px"> 
	   &nbsp;<select  name="cmbNombre" style="height: 30px; width: 127px;">
  
        <option name="cmbnombre" value="" disabled selected >Seleccionar</option>

	   <?php
        $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');				 
         
          $query = $mysqli -> query ("SELECT * FROM Proyectos");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['id_Proyecto'].'">'.$valores['nombreProyecto'].'</option>';
          } 
        ?>
           </select>            
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

     
     $nroCompra=$_POST['cmbNroCompra'];
     $tipoCompra=$_POST['rdbutton'];
     $nombreProyecto=$_POST['cmbNombre']; 
        
     $cad = "INSERT INTO CompraProyecto(id_Compras, tipoCompra, id_Proyecto)
                    VALUES ('nroCompra', 'tipoCompra', 'nombreProyecto')";
                           
        
     // Ejecuta sentencia INSERT
     $result = $cn->query($cad);
       // muestra mensaje que fue dado de alta

      echo "<center> Compra Asignada </center>";
     
  // cierra la conexion   
 $cn->close();
}
?>


<?php #Llammo a pie 
include('./template/pie.php');?>
