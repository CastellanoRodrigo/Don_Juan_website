<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Don Juan S.R.L detalles</title>
<link href="Hojaestilo.css" rel="stylesheet" type="text/css" /> <!-- Convoca al archivo de hojas de estilo llamado estilo.css-->
</head>
<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

<!-- Body -->
<body>
  <!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>

	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
	<h2>Muestra detalles iniciales de proyectos de la parcela 10</h2>
	</center>
	<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA
		NO LO PUDE HACER QUEDAR BIEN POR ESO PUSE EL COMENTARIO-->
	<center>
	<table border=2 width=400>
	<tr><td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 79px;">NombreProyecto</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">FechaInicio</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Fechacierre</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Hectareas</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Cabezas</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Categoria</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">InversionInicial</td>
    <td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">Parcela</td>   
	</tr>
	</center>

	<?php
	// conexion con la bd
	   		
	$host = "localhost";
	$usuario = "root";
	$clave = "";
	$base = "sistema_dj";

	$cn=new mysqli($host, $usuario, $clave, $base);

	$registros=$cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre,
						d.CantidadHectareas, d.CantidadCabezas, d.Categoria, d.InversionInicial, p.Id_Parcela 
						FROM detalleinicialhacienda d
						INNER JOIN proyectohacienda p ON d.Id_ProyectoHacienda = p.Id_ProyectoHacienda
						WHERE p.Id_Parcela='10'");	

	 while ($myrow=$registros->fetch_row()) //mientras haya registros muestra la informacion
     {
      	    
   	   echo "<tr>
   	   		 <td>$myrow[0]</td>
   	   		 <td>$myrow[1]</td>
   	   		 <td>$myrow[2]</td>
   	   		 <td>$myrow[3]</td>
   	   		 <td>$myrow[4]</td>
   	   		 <td>$myrow[5]</td>
   	   		 <td>$myrow[6]</td>
   	   		 <td>$myrow[7]</td>
   	   		 </tr>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
       echo 'No hay proyecto de HACIENDA en esta parcela'; //si no se encuentra hay mensaje 
     }
	 //Cierra conexion
    $cn->close();

    ?>
	
	<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA
		NO LO PUDE HACER QUEDAR BIEN POR ESO PUSE EL COMENTARIO-->
	<center>
	<table border=2 width=400>
	<tr><td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>NombreProyecto</td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>FechaInicio</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>FechaCierre</td>
    <td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Hectareas</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Cultivo </td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>RindeEspeculado</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>InversionInicial</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Parcela</td>
	</tr>
	</center>
	
	<?php
	 
    $cn= new mysqli("localhost", "root", "", "sistema_dj"); //conexion con base de datos
  	

    $registros= $cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre, d.CantidadHectareas, s.NombreCultivo,
 								   d.RindeEspeculado, d.InversionInicial, p.Id_Parcela
  							FROM detalleinicialsiembra d
 						    INNER JOIN proyectosiembra p ON d.Id_ProyectoSiembra = p.Id_ProyectoSiembra
  							INNER JOIN siembra s ON d.Id_Cultivo = s.Id_Cultivo
 						    WHERE p.Id_Parcela='10'");    
    

     while ($myrow=$registros->fetch_row()) //mientras haya registros muestra dia y hora
     {
      	    
   	   echo "<tr>
   	         <td> $myrow[0] </td>
   	         <td> $myrow[1] </td>
   	         <td> $myrow[2] </td>
   	         <td> $myrow[3] </td>
   	         <td> $myrow[4] </td>
   	         <td> $myrow[5] </td>
   	         <td> $myrow[6] </td>
   	         <td> $myrow[7] </td> 	   
   	         </tr>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
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
include('./template/pie.php');
?>
