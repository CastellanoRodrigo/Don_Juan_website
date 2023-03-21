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
	<div class="">
		<p>
			Ubicación: -36.01162, -63.98526 <br>
			Dimensión:  30 has, 0.30 km²	<br>
			Total has Ocupadas:				<br>
			Has DISPONIBLES: 				<br>

			<?php
  /* TITULO DE LA TABLA DE CADA COLUMNA EN EL THEAD*/
echo "<table>
        <thead> 
            <tr>
                <th style='width: 100px;'><p>PARCELA</p></th>
                <th style='width: 200px;'><p>HECTAREAS TOTALES</p></th>
                <th style='width: 200px;'><p>HECTAREAS OCUPADAS</p></th>
                <th style='width: 200px;'><p>HECTAREAS DISPONIBLES</p></th>
                <th style='width: 200px;'><p>PROYECTOS ACTIVOS</p></th>
                <th style='width: 100px;'><p>MODIFICAR</p></th>
            </tr>
        </thead>
    ";
                $consulta=mysqli_query($conexion, "SELECT *
                FROM parcela
                ORDER BY Id_Parcela ASC
            ");
                while($listar = mysqli_fetch_array($consulta)) 
                {
                  $cant = $listar['Id_Parcela'];
                  $sql = "SELECT COUNT(*) AS TOTAL FROM proyectoHacienda WHERE id_Parcela = $cant";
                  $resultado = $conexion->query($sql);
                  $row = $resultado->fetch_assoc();
                  $cantidad = $row['TOTAL'];

                  $sql = "SELECT sum(d.CantidadHectareas) AS TOTAL
                  FROM detalleinicialhacienda d
                  LEFT JOIN proyectohacienda p ON p.id_ProyectoHacienda = d.id_ProyectoHacienda
                  WHERE p.id_Parcela = $cant";
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
                        
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$listar['Id_Parcela']."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$listar['CantidadHectareas']."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$suma."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$disponible."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$cantidad."</h4 ></td>
                        <td class='text-center text-nowrap'><a class='btn btn-sm btn-outline-primary' href=./proyectosHacienda.php?no=".$listar['Id_Parcela']." class=mod><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                        </svg></a></td>
                        </tr>
                    ";
                  }
            
                  echo "</table>";?>


		</p>
	</div>

	<br>
	<h1> Parcela 11 </h1>
	
	<br>
</center>
<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA NO LO PUDE HACER  - cambie a posucion top-->
<center>
	<br>
	<table border=2 width=400 style="background-color: white">
		<h2> PROYECTO DE HACIENDA </h2>
		<tr>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 79px;">NombreProyecto</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">FechaInicio</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Fechacierre</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Hectareas</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Cabezas</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Categoria</td>
			<td style="text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">InversionInicial</td>
			
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
/* esto es lo q estaba antes de que pruebe las cosas nuevas
$registros = $cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre,
						d.CantidadHectareas, d.CantidadCabezas, c.nombreCategoria, d.InversionInicial, p.Id_Parcela 
						FROM detalleinicialhacienda d
						INNER JOIN proyectohacienda p ON d.Id_ProyectoHacienda = p.Id_ProyectoHacienda
						INNER JOIN Categoria c ON c.Id_Categoria = d.Id_Categoria
						WHERE p.Id_Parcela='11'"); puse el 8 para probar asi estaria bn
						modificar tmb borrar el td my row 7
*/
$registros = $cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre,
						d.CantidadHectareas, d.CantidadCabezas, c.nombreCategoria, d.InversionInicial
						FROM detalleinicialhacienda d
						INNER JOIN proyectohacienda p ON d.Id_ProyectoHacienda = p.Id_ProyectoHacienda
						INNER JOIN Categoria c ON c.Id_Categoria = d.Id_Categoria
						WHERE p.Id_Parcela='8'");

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
  /* TITULO DE LA TABLA DE CADA COLUMNA EN EL THEAD*/
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




















<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA
		NO LO PUDE HACER QUEDAR BIEN POR ESO PUSE EL COMENTARIO-->
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
			<td style=text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>InversionInicial</td>
			
		</tr>
</center>

<?php
$cn = new mysqli("localhost:3307", "root", "", "sistema_dj"); //conexion con base de datos
//$cn = new mysqli("localhost", "root", "", "sistema_dj"); //conexion con base de datos


$registros = $cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre, d.CantidadHectareas, s.NombreCultivo,
 								   d.RindeEspeculado, d.InversionInicial
  							FROM detalleinicialsiembra d
 						    INNER JOIN proyectosiembra p ON d.Id_ProyectoSiembra = p.Id_ProyectoSiembra
  							INNER JOIN siembra s ON d.Id_Cultivo = s.Id_Cultivo
 						    WHERE p.Id_Parcela='1'");

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