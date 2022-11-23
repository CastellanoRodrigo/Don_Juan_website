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
<h2>Muestra los detalles de la campaña que se encuentra en la parcela 3</h2>
</center>

<table width='50%' border='1' cellpadding='0' cellspacing='1' bordercolor='GRAY' style='border-collapse:collapse;' align='center'> 

  <tr><td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Detalle</td>
      <td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> Campaña </td>
      <td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Inicio</td>
      <td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Cierre</td></tr>
	   
	   <?php
	
    $cn= new mysqli("localhost", "root", "", "sistema_dj"); //conexion con base de datos

    $registros= $cn->query("select * from siembra"); 
     
     //selecciona dia y hora de tabla principal donde coincida tipo y destino con lo ingresado
     
    while ($myrow=$registros->fetch_row()) //mientras haya registros muestra dia y hora
     {
      	    
   	   echo "<tr><td> $myrow[0] </td><td> $myrow[1] </td><td> $myrow[2] </td><td> $myrow[3]</td></tr><br>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
       echo 'No se encontraron registros'; //si no hay mensaje
     }
	 //Cierra conexion
    $cn->close();
 		 
	
    ?>


<?php #Llammo a pie 
include('./template/pie.php');?>
