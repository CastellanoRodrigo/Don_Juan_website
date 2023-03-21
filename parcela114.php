<title>Don Juan S.R.L detalles</title>
<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./Template/Cabecera.php'); ?>

<!--
CODIGO QUE VI CON ALE - DE ESTA MANERA AGREGANDO EN LA TABLA PROYECTO CUANDO SE DA EL 
ALTA UNA COLUMNA CON CANTIDADHECTAREAS permite hacer las consultas de la primer table de manera
muchisimo mas facil y nos soluciona muchos problemas 
la sentencia en sql es la siguiente:

SELECT
p.CantidadHectareas as totales,
sum(pr.CantidadHectareas) as ocupadas,
p.CantidadHectareas - sum(pr.CantidadHectareas) as disponibles,
count(pr.id_Proyecto)
FROM parcela p
INNER JOIN proyectos2 pr on p.Id_Parcela = pr.Id_Parcela
WHERE p.Id_Parcela = 7;
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


			<?php
  /* TITULO DE LA TABLA DE CADA COLUMNA EN EL THEAD
  	- LISTA TODO ESO DE LA PARCELA EN LA QUE SE INGRESO EN ESTE CASO PUSE LA NRO= 4 
	#eef127 ----> amarillo
	#40cfff ----> celeste azul
	*/
echo "<table border=2 width=800 style='background-color: white'>
        <thead> 
            <tr>            
                <th style='text-align:center; font-size:16pt;background-color:#eef127;font-weight:bold; width: 150px;'><p>Dimension</p></th>
                <th style='text-align:center; font-size:16pt;background-color:#eef127;font-weight:bold; width: 200px;'><p>Has Ocupadas</p></th>
                <th style='text-align:center; font-size:16pt;background-color:#eef127;font-weight:bold; width: 200px;'><p>Has Disponibles</p></th>
                <th style='text-align:center; font-size:16pt;background-color:#eef127;font-weight:bold; width: 200px;'><p>Proyectos Activos</p></th>
                
            </tr>
        </thead>
    ";				/*antes aca puse id parcela 4*/ 
                $consulta=mysqli_query($conexion, "SELECT *
                FROM parcela
				WHERE id_parcela = '7'
                ORDER BY Id_Parcela ASC
            ");
                while($listar = mysqli_fetch_array($consulta)) 
                {
                  /* antes el select era de proyecto hacienda 
				  $sql = "SELECT COUNT(*) AS TOTAL FROM proyectiHacienda WHERE id_Parcela = '7'";*/ 
				  // con COUNT selecciona las filas q tiene con proyectos con idparcela = 7
                  $sql = "SELECT COUNT(*) AS TOTAL FROM Proyectos WHERE id_Parcela = '7'";
                  $resultado = $conexion->query($sql);
                  $row = $resultado->fetch_assoc();
                  $cantidad = $row['TOTAL'];

                  $sql = "SELECT sum(d.CantidadHectareas) + sum(ds.CantidadHectareas) AS TOTAL
                  FROM detallehacienda d
				  INNER JOIN proyectos p ON p.id_Proyecto = d.id_Proyecto
				  INNER JOIN detallesiembra ds ON p.id_proyecto = ds.id_Proyecto               
                  WHERE p.id_Parcela = '7'";
                  $resultado = $conexion->query($sql);
                  $row = $resultado->fetch_assoc();
                  $suma = $row['TOTAL'];

                  if($suma == null){
                    $suma = 0;
                  }

                  $disponible = $listar['CantidadHectareas'] - $suma;
                  echo
                    " 
                        <tr>                                    
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$listar['CantidadHectareas']."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$suma."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$disponible."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$cantidad."</h4 ></td>                       
                        </tr>
                    ";
                  }
            
                  echo "</table>";
				  
				 /*FINALIZA LO REFERENTE A LA TABLA QUE CONTIENE LAS CANT HAS DISPONIBLES ETC*/
				 ?>



	<br>
</center>
<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA NO LO PUDE HACER  - cambie a posucion top-->
<center>
	<br>
	<table border=2 width=400 style="background-color: white">
		<h2> PROYECTO DE HACIENDA </h2>
		<br>
		<tr>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 79px;">NombreProyecto</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">FechaInicio</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Fechacierre</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Hectareas</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Cabezas</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Categoria</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">Inversion</td>
			
		</tr>
</center>

<?php
// conexion con la bd
$host = "localhost:3307";
//$host = "localhost";
$usuario = "root";
$clave = "";
$base = "sistema_dj";

$cn = new mysqli($host, $usuario, $clave, $base);

// ESTOY PROBANDO TODO LO DE LA PARCELA 7 AHORA
$registros = $cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre,
						d.CantidadHectareas, d.CantidadCabezas, c.nombreCategoria, d.Inversion
						FROM detallehacienda d
						INNER JOIN proyectos p ON d.Id_Proyecto = p.Id_Proyecto
						INNER JOIN Categoria c ON c.Id_Categoria = d.Id_Categoria
						WHERE p.Id_Parcela='7'");

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
    ";

?>

<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA  NO LO PUDE HACER QUEDAR BIEN POR ESO PUSE EL COMENTARIO-->
<center>
	<br>
	<table border=2 width=400 style="background-color: white">
		<br>
		<br>
		<h2> PROYECTO DE SIEMBRA </h2>
		<tr>
			<td style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>NombreProyecto</td>
			<td style=text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>FechaInicio</td>
			<td style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>FechaCierre</td>
			<td style=text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Hectareas</td>
			<td style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Cultivo </td>
			<td style=text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>RindeEspeculado</td>
			<td style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Inversion</td>
			
		</tr>
</center>

<?php
$cn = new mysqli("localhost:3307", "root", "", "sistema_dj"); //conexion con base de datos

// PROBANDO TODO LO DE LA PARCELA 7
$registros = $cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre, d.CantidadHectareas, s.NombreCultivo,
 								   d.RindeEspeculado, d.Inversion
  							FROM detallesiembra d
 						    INNER JOIN proyectos p ON d.Id_Proyecto = p.Id_Proyecto
  							INNER JOIN siembra s ON d.Id_Cultivo = s.Id_Cultivo
 						    WHERE p.Id_Parcela='7'");

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