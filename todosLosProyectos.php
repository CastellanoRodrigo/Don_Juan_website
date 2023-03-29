<title>Don Juan S.R.L detalles</title>
<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./Template/Cabecera.php'); ?>

<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>

</br>
<center>
	<div class="">
		<h1> TODOS LOS PROYECTOS </h1>		
	</div>		
</center>
<center>
<table border=2 style="background-color: white">
		<thead>
		<tr>			
			<th style="text-align:center;font-size:16pt;background-color:#40cfff;font-weight:bold; width: 300px;">Nombre proyecto</th>
			<th style="text-align:center;font-size:16pt;background-color:#40cfff;font-weight:bold; width: 150px;">Parcela</th>
			<th style="text-align:center;font-size:16pt;background-color:#40cfff;font-weight:bold; width: 150px;">Tipo</th>
			<th style="text-align:center;font-size:16pt;background-color:#40cfff;font-weight:bold; width: 200px;">Cantidad Has</th>
			<th style="text-align:center;font-size:16pt;background-color:#40cfff;font-weight:bold;width: 150px;">Estado</th>					
		</tr>
		</thead>
	   <?php
  /* TITULO DE LA TABLA DE CADA COLUMNA EN EL THEAD
  - LISTA TODO ESO DE LA PARCELA EN LA QUE SE INGRESO EN ESTE CASO PUSE LA NRO= 7 
	#eef127 ----> amarillo
	#40cfff ----> celeste azul
	*/
	$cn = new mysqli("localhost:3307", "root", "", "donjuandb"); //conexion con base de datos

	// muestra TODOS LOS PROYECTOS ACTIVOS Y NO ACTIVOS
	$registros = $cn->query(" SELECT 
							  pr.nombreProyecto, pr.id_Parcela, tp.tipoProyecto, pr.cantidadHas, ep.estado
							  FROM proyectos pr
							  INNER JOIN tipoProyecto tp ON pr.id_tipoProyecto = tp.id_tipoProyecto
							  INNER JOIN estadoProyecto ep ON pr.id_EstadoProyecto = ep.id_EstadoProyecto");

	

	while ($myrow = $registros->fetch_row()) //mientras haya registros muestra la informacion
			{
				echo "<tr>
   	   					 <td style='text-align:left;'>$myrow[0]</td>
   	   					 <td style='text-align:center;'>$myrow[1]</td>
   	   					 <td style='text-align:center;'>$myrow[2]</td>
   	   		 			 <td style='text-align:center;'>$myrow[3]</td>  	  
						 <td style='text-align:center;'>$myrow[4]</td> 
   	   	  			  </tr>";
}
// se nos habia escapado este if 
if (mysqli_num_rows($registros) <= 0) {
	echo "<br>";
	echo 'ERROR EN EL CODIGO'; //si no hay mensaje
	echo "<br>";
}

$cn->close();

		?>

	<br>
</center>

<br>
<br>
<br>

</body>

<?php #Llammo a pie 
include('./Template/Pie.php');
?>