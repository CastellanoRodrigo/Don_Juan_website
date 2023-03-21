<?php #Llammo a pie 
include('./template/Cabecera.php');
include('./modelo/conexion.php');

$consulta = ConsultarIncidente($_GET['no']);

function ConsultarIncidente($no_tic)
{	
	$conexion=mysqli_connect('localhost:3307', 'root', '', 'sistema_dj') or exit('No se puede conectar con la base de datos');
	$sentencia =  "SELECT * FROM proyectohacienda WHERE Id_ProyectoHacienda='".$no_tic."'";
	$resultado = mysqli_query($conexion, $sentencia);
	$filas = mysqli_fetch_assoc($resultado);
	return [
		$filas['Id_ProyectoHacienda'],/*0*/
		$filas['Id_Parcela'],/*1*/
    $filas['NombreProyecto'],/*2*/
		$filas['Estado']/*3*/
	];
}

?>

<center>
<a href="./detalleHacienda.php">Volver atras</a>
<br/>
<br/>

<h2>Detalles Proyecto <?php echo $consulta[2];?> en parcela <?php echo $consulta[1]?></h2>
<br/>
<br/>
<?php
    $cant = $consulta[1];
    $sql = "SELECT CantidadHectareas FROM parcela WHERE Id_Parcela = $cant";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();
    $cantidad = $row['CantidadHectareas'];/* CANTIDAD DE HECTAREAS QUE TIENE LA PARCELA */

    $sql = "SELECT sum(d.CantidadHectareas) AS TOTAL
    FROM detalleinicialhacienda d
    LEFT JOIN proyectohacienda p ON p.id_ProyectoHacienda = d.id_ProyectoHacienda
    WHERE p.id_Parcela = $cant";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();
    $suma = $row['TOTAL']; /* HECTAREAS OCUPADAS */

    if($suma == null){
    $suma = 0;
    }

    $disponible = $cantidad - $suma;
    echo "Hectareas disponibles: "; echo $disponible;

    // NO REALIZA EL INSERT COMO DEBERIA YA QUE NO HAY INSERT!!!!
    ?>



<br/>
<br/>

<form method="post">
 <table>
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
 <tr>
  <td style="width: 381px; height: 47px;">
   Cantidad Hectareas utilizadas:</td>
  <td style="width: 381px; height: 47px;">  
	   <input name="txtHectareas" type="number" class="auto-style1" style="height: 30px; width: 127px" min="1" max="<?php echo $disponible;?>" required />
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
  <td style="width: 381px; height: 47px;">
   <input type="submit" value="Cargar detalle">
   <input  type="reset" value="Cancelar" style="width: 83px"></td>
  </tr>
</table>
</form>
</center>

