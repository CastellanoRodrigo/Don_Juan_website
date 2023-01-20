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
 <table>
 <tr>
  <td style="height: 47px; width: 381px;">
   Nombre del proyecto</td>
  <td style="width: 366px; height: 47px"> 
	   &nbsp;<select  name="cmbNombre" style="height: 30px; width: 127px;" required>
  
        <option name="cmbnombre" value="" disabled selected >Seleccionar</option>

	   <?php
        $mysqli = new mysqli('localhost:3307', 'root', '', 'sistema_dj');		
	      // $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
         
          $query = $mysqli -> query ("SELECT * FROM ProyectoHacienda ");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['Id_ProyectoHacienda'].'">'.$valores['NombreProyecto'].'</option>';
          } 
        ?>
        
	 <td/>	   	 
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Fecha de inicio (yyyy/MM/dd):</td>
  <td style="width: 381px; height: 47px;">  
	   <input name="txtFechaInicio" type="text" class="auto-style1" style="height: 30px; width: 127px" required />
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
 <tr>
  <td style="width: 381px; height: 47px;">
   Cantidad Hectareas utilizadas:</td>
  <td style="width: 381px; height: 47px;">  
	   <input name="txtHectareas" type="text" class="auto-style1" style="height: 30px; width: 127px" required />
	 </td>
 </tr>


<tr>
  <td style="width: 381px; height: 47px;">
   Categoria:</td>
   <td style="width: 366px; height: 47px"> 
	   &nbsp;<select  name="cmbCategoria" style="height: 30px; width: 127px;" required> 
        <option name="cmbcategoria" value="" disabled selected >Seleccionar</option>
	   <?php
        $mysqli = new mysqli('localhost:3307', 'root', '', 'sistema_dj');		
	      // $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
	 
          $query = $mysqli -> query ("SELECT * FROM Categoria ");
  
          while ($valores = mysqli_fetch_array($query)) {  
            echo '<option value="'.$valores['Id_Categoria'].'">'.$valores['nombreCategoria'].'</option>'; 
          } 
        ?>       
	 <td/>	   	
 </tr>
 <tr>
  <td style="width: 381px; height: 47px;">
   Fecha de cierre aproximado (yyyy/MM/dd):</td>
  <td style="width: 381px; height: 47px;">  
	   <input name="txtFechaCierre" type="text" class="auto-style1" style="height: 30px; width: 127px" required/>
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
  <td style="width: 381px; height: 47px;">
   <input type="submit" value="Cargar detalle">
   <input  type="reset" value="Cancelar" style="width: 83px"></td>
  </tr>
</table>
</form>
</center>

<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
     $cn= new mysqli("localhost:3307" , "root" ,"" , "sistema_dj" );
     // $cn= new mysqli("localhost" , "root" ,"" , "sistema_dj" );
     // captura datos ingresados
     //$iddetalle=$_POST['txtIdDetalle'];
     $nombre=$_POST['cmbNombre']; 
     $fechainicio=$_POST['txtFechaInicio'];
     $fechacierre=$_POST['txtFechaCierre'];
     $cantHectareas=$_POST['txtHectareas'];
     $cabezas=$_POST['txtCabezas']; 
     $categoria=$_POST['cmbCategoria'];
     //$categoria=$_POST['txtCategoria']; antes era asi con la caja de texto
     $inversion=$_POST['txtInversion'];	 
	 		
		
     // Cadena que controla si hay una campaña creada con ese Id
     //$sql="select  * from detalleinicialhacienda  where Id_DetalleHacienda= $iddetalle";
     // Ejecuta sentencia en sql
      //$re=$cn->query($sql);
      // controla cantidad de registros que existen en la tabla
      //$c=$re->num_rows; 
      //if ( $c==0)
    //{  //cadena que agrega el regsitro osea la fila a la tabla CampañaHacienda
        $cad = "INSERT INTO detalleinicialhacienda(Id_ProyectoHacienda, FechaInicio, FechaCierre, CantidadHectareas, CantidadCabezas, Id_Categoria, InversionInicial) VALUES ('$nombre','$fechainicio','$fechacierre','$cantHectareas','$cabezas','$categoria','$inversion')";
                           
        // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje que fue dado de alta
       echo "El pryecto fue dada de alta con exito";
    //}
    //else 
   // {
      // mensaje que ya existe por lo tanto no fue dado de alta
      //echo "Ya existe una proyecto con ese ID";
      //. mysql_error().":". mysql_error()."<br>";
    // }
     
  // cierra la conexion   
 $cn->close();
}
?>


<?php #Llammo a pie 
include('./template/pie.php');?>
