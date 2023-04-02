<title>Don Juan S.R.L detalles</title>
<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./Template/Cabecera.php'); ?>

<!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>

<br>

<center>
<div class="descipcion">
		<div class="descripcion2" position: absolute>
			<p>
				Podria poner un boton o algo
		      <br>
				por ejemplo que lleve a excel o pdf?
			</p>
			<div class="img">
				<img src="" alt="">
			</div>
		</div>
	</div>
<br>
</center>
<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA NO LO PUDE HACER  - cambie a posucion top-->
<center>
	<br>
	<table border=2 style="background-color: white">
		<h2> COMPRAS REALIZADAS</h2>
		<input  type="reset" value="PDF" style="width: 83px">
		<input  type="reset" value="Excel" style="width: 83px">
		<tr>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Fecha</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 20px;">TipoFactura</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">PuntoVenta</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">NroFactura</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">TipoDocEmisor</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">NroDocEmisor</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">Proveedor</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 79px;">TipoCambio</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Moneda</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">ImporteNeto</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">IVA</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Total</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Detalle</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">FromaPago</td>			
		</tr>
</center>

<?php
// conexion con la bd
$host = "localhost:3307";
//$host = "localhost";
$usuario = "root";
$clave = "";
$base = "donjuandb";

$cn = new mysqli($host, $usuario, $clave, $base);

/*$cad = "SELECT c.Fecha, c.TipoFactura, c.PuntoDeVenta, c.NroFactura, c.TipoDocEmisor, c.NroDocEmisor, c.Proveedor,
					 c.TipoCambio, c.Moneda, c.ImporteNeto, c.IVA, c.ImporteTotal, c.Detalle, c.FormaPago, c.TipoCompra
					 FROM compras c ";
                
*/

$registros = $cn->query("SELECT c.fecha, c.tipoFactura, c.puntoDeVenta, c.nroFactura, c.tipoDocEmisor, c.nroDocEmisor, c.proveedor,
						c.tipoCambio, c.moneda, c.importeNeto, c.IVA, c.importeTotal, c.detalle, c.formaPago
						FROM Compras c");

while ($myrow = $registros->fetch_row()) //mientras haya registros muestra la informacion
{

	echo "<tr>
   	   		 <td style=text-align:center;>$myrow[0]</td>
   	   		 <td style=text-align:center;>$myrow[1]</td>
   	   		 <td style=text-align:right;>$myrow[2]</td>
   	   		 <td style=text-align:right;>$myrow[3]</td>
   	   		 <td style=text-align:center;>$myrow[4]</td>
   	   		 <td style=text-align:right;>$myrow[5]</td>
   	   		 <td style=text-align:center;>$myrow[6]</td>
			 <td style=text-align:right;>$myrow[7]</td>
			 <td style=text-align:center;>$myrow[8]</td>
			 <td style=text-align:right;>$myrow[9]</td>
			 <td style=text-align:right;>$myrow[10]</td>
			 <td style=text-align:right;>$myrow[11]</td>
			 <td style=text-align:center;>$myrow[12]</td>
			 <td style=text-align:center;>$myrow[13]</td>
			 
   	   	   </tr>";
}

if (mysqli_num_rows($registros) <= 0) {
	echo "<br>";
	echo 'No hay Compras realizadas'; //si no hay mensaje
	echo "<br>";
}

$cn->close();

?>
<br>
<br>
<br>
<br>
</body>

<?php #Llammo a pie 
include('./Template/Pie.php');
?>