
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Home + menu </title>
<link href="Hojaestilo.css" rel="stylesheet" type="text/css" /> <!-- Convoca al archivo de hojas de estilo llamado estilo.css-->
</head>

<body>

	<center> <table border=2 width=400>
    <tr><td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Id_DetalleHacienda</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> Id_ProyectoHacienda </td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>FechaInicio</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> CantidadHectareas </td>
    <td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>CantidadCabezas</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> CantidadHectareas </td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Categoria</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> InversionInicial</td></tr>
	</center>

<?php
	 
    $cn= new mysqli("localhost", "root", "", "sistema_dj"); //conexion con base de datos
  	//$dato=1;  //dato es el id de la parcela que va a tomar

    $registros= $cn->query("select * from detalleinicialhacienda where Id_DetalleHacienda= '2'"); 

     
     while ($myrow=$registros->fetch_row()) //mientras haya registros muestra dia y hora
     {
      	    
   	   echo "<tr><td> $myrow[0] </td><td> $myrow[1] </td><td> $myrow[2] </td><td> $myrow[3]</td><td> $myrow[4] </td><td> $myrow[5] </td><td> $myrow[6] </td><td> $myrow[7]</td></tr><br>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
       echo 'No se encontraron registros para los filtros seleccionados.'; //si no hay mensaje
     }
     
	// Cierra conexion
    $cn->close();
 		 
	
?>
</div>
</html>