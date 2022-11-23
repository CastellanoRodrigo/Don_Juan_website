<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Libreria</title>
</head>

<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

<title>Detalles campaÃ±as Hacienda</title>
<!-- Body -->
<body>
  <!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>
<center>
<h2>Muestra los detalles de la campaña que se encuentra en la parcela 2</h2>
</center>

<center>
<table border=2 width=400>";
	<tr><td style= "text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold; width: 108px;"> Id Detalle</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 79px;"> Id Proyecto</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;"> Fecha Inicio</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;"> Fecha cierre</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 111px;"> Hectareas</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;"> Cabezas</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;"> Categoria</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;"> Inversion</td></tr>
</center>
	   <?php
	   	// conexion con la bd
	 // $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
	 	
	 	
	$host = "localhost";
	$usuario = "root";
	$clave = "";
	$base = "sistema_dj";

	$cn=new mysqli($host, $usuario, $clave, $base);

	$registros=$cn->query("select * from detalleinicialhacienda");
		
	 while ($myrow=$registros->fetch_row()) //mientras haya registros muestra dia y hora
     {
      	    
   	   echo "<tr><td> $myrow[0] </td><td> $myrow[1] </td><td> $myrow[2] </td><td> $myrow[3]</td><td> $myrow[4] </td><td> $myrow[5] </td><td> $myrow[6] </td><td> $myrow[7]</td></tr><br>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
       echo 'No se encontraron registros'; //si no hay mensaje
     }
	 //Cierra conexion
    $cn->close();
	
 
	//echo "</table></center>";

    ?>


<?php #Llammo a pie 
include('./template/pie.php');?>
