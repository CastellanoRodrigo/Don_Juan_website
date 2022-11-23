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
<h2>Muestra los detalles de la campaña que se encuentra en la parcela 1</h2>
</center>

	   <?php
	   	// conexion con la bd
	      $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
	 	
	 	
	$host = "localhost";
	$usuario = "root";
	$clave = "";
	$base = "sistema_dj";

	$cn=new mysqli($host, $usuario, $clave, $base);

	$registros=$cn->query("select * from parcela");
	
//parte del titulo de la tabla que aparece en verde
	echo "<center> <table border=2 width=400>";
	echo "<tr><td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Id_Parcela</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> CantidadHectareas </td></tr>";

	while ($myrow=$registros->fetch_array())
	{
		echo "<tr><td style= font-size:14pt;background-color:AliceBlue>$myrow[Id_Parcela]</td> ";
		echo "<td style= font-size:14pt;background-color:Cornsilk>$myrow[CantidadHectareas]</td></tr>";	 
	}
 
	echo "</table></center>";

	$cn->close();

        ?>
  

<?php #Llammo a pie 
include('./template/pie.php');?>
