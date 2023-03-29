<title>Don Juan S.R.L detalles</title>
<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./Template/Cabecera.php'); ?>

<!--
CODIGO QUE VI CON ALE - DE ESTA MANERA AGREGANDO EN LA TABLA PROYECTO CUANDO SE DA EL 
ALTA UNA COLUMNA CON CANTIDADHECTAREAS permite hacer las consultas de la primer table de manera
muchisimo mas facil y nos soluciona muchos problemas 

pr significa proyectos y p es parcela

la sentencia en sql es la siguiente: FUNCIONA

SELECT
p.dimension as totales,
sum(pr.cantidadHas) as ocupadas,
p.dimension - sum(pr.cantidadHas) as disponibles,
count(pr.id_Proyecto)
FROM parcela p
INNER JOIN Proyectos pr on p.id_Parcela = pr.id_Parcela
WHERE p.id_Parcela = 7;
-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>

</br>
<center>
	<div class="">
		<h1> Parcela 11</h1>
		Ubicación: -36.01162, -63.98526   (corresponde a la 7 con las nuevas tablas)
	</div>		
	<br>
</center>
<center>
<table border=2 width= 850px; style="background-color: white">
		<thead>
		<tr>			
			<th style="text-align:center;font-size:16pt;background-color:#eef127;font-weight:bold; width: 79px;">Dimension</th>
			<th style="text-align:center;font-size:16pt;background-color:#eef127;font-weight:bold; width: 97px;">Has Ocupadas</th>
			<th style="text-align:center;font-size:16pt;background-color:#eef127;font-weight:bold; width: 97px;">Has Disponibles</th>
			<th style="text-align:center;font-size:16pt;background-color:#eef127;font-weight:bold; width: 86px;">Proyectos Activos</th>					
		</tr>
		</thead>
	   <?php
  /* TITULO DE LA TABLA DE CADA COLUMNA EN EL THEAD
  - LISTA TODO ESO DE LA PARCELA EN LA QUE SE INGRESO EN ESTE CASO PUSE LA NRO= 7 
	#eef127 ----> amarillo
	#40cfff ----> celeste azul
	*/
	$cn = new mysqli("localhost:3307", "root", "", "donjuandb"); //conexion con base de datos

	// PROBANDO TODO LO DE Lo PARCELA 7
	$registros = $cn->query(" SELECT
							  p.dimension, sum(pr.cantidadHas), p.dimension - sum(pr.cantidadHas), count(pr.id_Proyecto)
							  FROM parcela p
							  INNER JOIN Proyectos pr on p.id_Parcela = pr.id_Parcela
							  WHERE p.id_Parcela = '7'");

	/* 	CREO QUE DEBERIA TMB EN EL WHERE TENER EN CUENTA SOLO LOS PROYECTOS ACTIVOS POR LO TANTO SERIA ASI 

		(" SELECT
			 p.dimension, sum(pr.cantidadHas), p.dimension - sum(pr.cantidadHas), count(pr.id_Proyecto)
			FROM parcela p
			INNER JOIN Proyectos pr on p.id_Parcela = pr.id_Parcela
			WHERE p.id_Parcela = '7' AND pr.id_Proyecto = '2'");
	
	*/


	while ($myrow = $registros->fetch_row()) //mientras haya registros muestra la informacion
			{

				echo "<tr>
   	   					 <td>$myrow[0]</td>
   	   					 <td>$myrow[1]</td>
   	   					 <td>$myrow[2]</td>
   	   		 			 <td>$myrow[3]</td>  	   
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
<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA NO LO PUDE HACER  - cambie a posucion top
	width=400 ESTA TABLA TENIA UN WIDTH DE 400PX POR ESO TMB NO SE VEIA LINDO
en los th style tmb se le puede dar el width para el ancho de las columnas!!!!-->
<center>
	<br>
	<table border=2 width= 1200px; style="background-color: white">
		<h2> PROYECTO DE HACIENDA </h2>
		<br>
		<thead>
			<tr>
		    <th style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;">Nombre Proyecto</th>
			<th style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;">Fecha Inicio</th>
			<th style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;">Fecha Cierre</th>
			<th style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;">Hectareas</th>
			<th style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;">Cabezas</th>
			<th style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;">Categoria</th>
			<th style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 100px;">Inversion</th>			
			</tr>
		</thead>
</center>

<?php
// conexion con la bd
$host = "localhost:3307";
$usuario = "root";
$clave = "";
$base = "donjuandb";

$cn = new mysqli($host, $usuario, $clave, $base);

// ESTOY PROBANDO TODO LO DE LA PARCELA 7 AHORA en sql funciona correctamente 
$registros = $cn->query("SELECT
						pr.nombreProyecto, dh.fechaInicio, dh.fechaCierre, pr.cantidadHas, dh.cantidadCabezas, c.nombreCategoria, dh.inversion
						FROM Proyectos pr
						INNER JOIN detalleHacienda dh ON pr.id_Proyecto = dh.id_Proyecto
						INNER JOIN Categoria c ON c.id_Categoria = dh.id_Categoria
						WHERE pr.id_Parcela = '7'");

while ($myrow = $registros->fetch_row()) //mientras haya registros muestra la informacion
{

	echo "<tr>
   	   		 <td>$myrow[0]</td>
   	   		 <td>$myrow[1]</td>
   	   		 <td>$myrow[2]</td>
   	   		 <td>$myrow[3]</td>
   	   		 <td>$myrow[4]</td>
   	   		 <td>$myrow[5]</td>
   	   		 <td>$myrow[6]</td>
   	   	  </tr>";
}
// se nos habia escapado este if 
if (mysqli_num_rows($registros) <= 0) {
	echo "<br>";
	echo 'No hay proyecto de HACIENDA en esta parcela'; //si no hay mensaje
	echo "<br>";
}

$cn->close();

?>

<!-- aca pruebo algo nuevo para ver q onda si sale como PIENSO-->

<?php
  /* TITULO DE LA TABLA DE CADA COLUMNA EN EL THEAD
   NO IRIA ERA PARA PROBAR COMO SE REEMPLAZA EL HTML POR UN PHP PARA HACER LA TABLA */
	/*
   echo "<table>
        <thead> 
            <tr>
                <th style='width: 200px;'><p>Nombre Proyecto</p></th>
                <th style='width: 180px;'><p>Fecha inicio</p></th>
                <th style='width: 150px;'><p>Has Ocupadas</p></th>
                <th style='width: 150px;'><p>Has Disponibles</p></th>
                <th style='width: 100px;'><p>Cabezas</p></th>
                <th style='width: 100px;'><p>Inversion</p></th>
            </tr>
        </thead>
    ";*/
?>

<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA  NO LO PUDE HACER QUEDAR BIEN POR ESO PUSE EL COMENTARIO
PARA NO TENER PROBLEMAS CON LOS TITULOS NO HAY Q PONERLE WIDTH A LA TABLA O PONERLE UNO PROBANDO PARA QUE QUEDE BN-->
<center>
	<table border=2 Width=1200px; style="background-color: white">
		<br>
		<br>
		<h2> PROYECTO DE SIEMBRA </h2>
		<thead>		
		<tr>
			<th style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Nombre Proyecto</th>
			<th style=text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Fecha Inicio</th>
			<th style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Fecha Cierre</th>
			<th style=text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Hectareas</th>
			<th style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Cultivo </th>
			<th style=text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Rinde Esperado</th>
			<th style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Inversion</th>			
		</tr>
		</thead>
</center>

<?php
$cn = new mysqli("localhost:3307", "root", "", "donjuandb"); //conexion con base de datos

// PROBANDO TODO LO DE Lo PARCELA 7
$registros = $cn->query("SELECT
						pr.nombreProyecto, ds.fechaInicio, ds.fechaCierre, pr.cantidadHas, c.nombreCultivo, ds.rindeEsperadoHas, ds.inversion
						FROM Proyectos pr
						INNER JOIN detalleSiembra ds ON pr.id_Proyecto = ds.id_Proyecto
						INNER JOIN Cultivos c ON c.id_Cultivo = ds.id_Cultivo
						WHERE pr.id_Parcela = '7'");

while ($myrow = $registros->fetch_row()) //mientras haya registros muestra
{

	echo "<tr>
   	         <td> $myrow[0] </td>
   	         <td> $myrow[1] </td>
   	         <td> $myrow[2] </td>
   	         <td> $myrow[3] </td>
   	         <td> $myrow[4] </td>
   	         <td> $myrow[5] </td>
   	         <td> $myrow[6] </td>	   
   	         </tr>";
}
if (mysqli_num_rows($registros) <= 0) {
	echo "<br>";
	echo "<br>";
	echo 'No hay proyecto de SIEMBRA en esta parcela'; //si no hay mensaje
}

// Cierra conexion
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