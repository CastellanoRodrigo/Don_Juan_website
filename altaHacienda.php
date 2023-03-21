<?php #Llammo a pie 
include('./template/Cabecera.php');
include('./modelo/conexion.php');

$consulta = ConsultarIncidente($_GET['no']);

function ConsultarIncidente($no_tic)
{	
	$conexion=mysqli_connect('localhost:3307', 'root', '', 'sistema_dj') or exit('No se puede conectar con la base de datos');
	$sentencia =  "SELECT * FROM parcela WHERE Id_Parcela='".$no_tic."'";
	$resultado = mysqli_query($conexion, $sentencia);
	$filas = mysqli_fetch_assoc($resultado);
	return [
		$filas['Id_Parcela'],/*0*/
		$filas['CantidadHectareas'],/*1*/
	];
}

?>

<center>
    <a href="./altaProyectoHacienda.php">Volver atras</a>
<h2>Dar de Alta Nuevo Proyecto Hacienda</h2>
</center>
<center>
    <form method="post" action="./cargarProyectoHacienda.php">
   <label for="nro">Parcela N°:</label>
   <input type="text" name="nro" id="nro" value="<?php echo $consulta[0]?>" readonly>
 <table>
 <tr>
  <td>
   Nombre del proyecto:</td>
  <td>
	   <input name="txtNombre" style="width: 127px; height: 30px" type="text" required/>
	 </td>
  <td >
   <input type="submit" value="Crear Campaña">
   <input  type="reset" value="Cancelar" style="width: 83px"></td>
 </tr>
</table>
</form>
</center>
