<?php
session_start();
#controlamos el ingreso, si trata de acceder manualmente por url 
#lo redirige al login
if (empty($_SESSION["id"])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./menu-lateral/estilos.css">

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰ </label>
            </div>
            <div class="logo">
                <h1>Menú</h1>

                <!--Usuario Logueado-->
                <div class="button">
                    <div class=".text-light">
                        <?php
                        echo $_SESSION["nombre"] . " " . $_SESSION["apellido"];
                        ?>
                    </div>
                </div>

            </div>
            <nav class="menu">
                <a href="./menu-lateral/index.php">Inicio</a>
                <a href="./Nosotros.php">Nosotros</a>
                <a href="./Usuarios.php">Usuarios</a>
                <a href="">Contacto</a>
            </nav>
        </div>
    </header>
    <div class="bd-example mb0" style="height: 15vh"></div>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light fixed-top">
        <div class="capa"></div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
                    <ul class="menu">
                        <li><a href="#">Añadir proyecto</a></li>
                        <ul class="menu">
                            <li><a href="#">Añadir proyecto hacienda</a></li>
                            <li><a href="#">Añadir proyecto siembra</a></li>
                            <li><a href="#">Añadir detalles hacienda</a></li>
                            <li><a href="#">Añadir detalles hacienda</a></li>
                        </ul>
                        <li><a href="#">Opci�n 2</a></li>
                        <li><a href="#">Opci�n 3</a></li>
                        <li><a href="#">Opci�n 4</a></li>
                        <li><a href="#">Opci�n 5</a></li>
                    </ul>

                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<title>Detalles Parcela 1</title>
	<center>
	
	</center>
	<!--ACA IRIA UN TITULO DICIENDO: PROYECTOS DE HACIENDA
	
		NO LO PUDE HACER QUEDAR BIEN POR ESO PUSE EL COMENTARIO-->
		<h1 style="text-align:center ;">Detalle inicial de parcela</h1>
	<center>
	<table border=2 width=400>
	<tr><td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">NombreProyecto</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">FechaInicio</td>
	<td style="text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">Fechacierre</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">Hectareas</td>
	<td style="text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">Cabezas</td>
	<td style="text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">Categoria</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">InversionInicial</td>
    <td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">Parcela</td>   
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
						WHERE p.Id_Parcela='1'");	

	 while ($myrow=$registros->fetch_row()) //mientras haya registros muestra la informacion
     {
      	    
   	   echo "<tr>
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
	<tr><td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:#1f361f;">NombreProyecto</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:#1f361f;">FechaInicio</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:#1f361f;">FechaCierre</td>
    <td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:#1f361f;">Hectareas</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:#1f361f;">Cultivo </td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:#1f361f;">RindeEspeculado</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:#1f361f;">InversionInicial</td>
	<td style= "text-align:center;font-size:16pt;background-color:#fff;font-weight:bold; width: 97px;color:1f361f;">Parcela</td>
	</tr>
	</center>
	
	<?php
	 
    $cn= new mysqli("localhost", "root", "", "sistema_dj"); //conexion con base de datos
  	

    $registros= $cn->query("SELECT p.NombreProyecto, d.FechaInicio, d.FechaCierre, d.CantidadHectareas, s.NombreCultivo,
 								   d.RindeEspeculado, d.InversionInicial, p.Id_Parcela
  							FROM detalleinicialsiembra d
 						    INNER JOIN proyectosiembra p ON d.Id_ProyectoSiembra = p.Id_ProyectoSiembra
  							INNER JOIN siembra s ON d.Id_Cultivo = s.Id_Cultivo
 						    WHERE p.Id_Parcela='1'");    
    

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


