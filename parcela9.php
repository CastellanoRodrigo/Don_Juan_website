
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Home + menu </title>
<link href="Hojaestilo.css" rel="stylesheet" type="text/css" /> <!-- Convoca al archivo de hojas de estilo llamado estilo.css-->
</head>

<body>

	<center> <table border=2 width=400>
    <tr><td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Id_DetalleSiembra</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> Id_ProyectoSiembra </td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>FechaInicio</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> CantidadHectareas </td>
    <td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>CantidadHectareas</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> Id_Cultivo </td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>RindeEspeculado</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> InversionInicial</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> Id_Parcela</td>
	</tr>
	</center>
	
<?php
	 
    $cn= new mysqli("localhost", "root", "", "sistema_dj"); //conexion con base de datos
  	//$dato=1;  //dato es el id de la parcela que va a tomar

    $registros= $cn->query("SELECT d.Id_DetalleSiembra, d.Id_ProyectoSiembra, d.FechaInicio, d.FechaCierre, d.CantidadHectareas, d.Id_Cultivo, d.RindeEspeculado, d.InversionInicial
        					p.Id_Parcela
						    FROM detalleinicialsiembra d
	 						INNER JOIN proyectosiembra p ON d.Id_ProyectoSiembra = p.Id_ProyectoSiembra
	 						WHERE p.Id_Parcela = '5'");
    
    
    //("select Id_DetalleSiembra, Id_ProyectoSiembra, FechaInicio, FechaCierre, CantidadHectareas, Id_Cultivo, RindeEspeculado, InversionInicial  from 
    						//detalleinicialsiembra inner join proyectosiembra.Id_Parcela where Id_Parcela = '9'");
    						    
    //("select * from detalleinicialsiembra where Id_DetalleHacienda= '2'"); ----> esto asi funciona bien

     while ($myrow=$registros->fetch_row()) //mientras haya registros muestra dia y hora
     {
      	    
   	   echo "<tr><td> $myrow[0] </td><td> $myrow[1] </td><td> $myrow[2] </td><td> $myrow[3]</td><td> $myrow[4] </td><td> $myrow[5] </td><td> $myrow[6] </td><td> $myrow[7]</td><td> $myrow[8]</td></tr><br>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
       echo 'No se encontraron registros para los filtros seleccionados.'; //si no hay mensaje
     }
     
	// Cierra conexion
    $cn->close();
 		 
	
?>
</div>
</html>