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
				<h1>Proyectos</h1>
				
			<!--Usuario Logueado-->
			<div class="button">
				<div class=".text-light">
            <?php
           echo $_SESSION["nombre"]." ".$_SESSION["apellido"];
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
			<a href="#">Añadir proyecto hacienda</a>
			<a href="#">Añadir proyecto siembra</a>
			<a href="#">Añadir detalles hacienda</a>
			<a href="#">Añadir detalles siembra</a>
			<a href="#">Modificar</a>
			<a href="#">Finalizar</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<div style="text-align:center;">
	<table border="1" style="margin: 0 auto;">

	
		<h1>INFORMACION DE LAS PARCELAS</h1>
		<tr>
			<th><a href="parcela1.php"><button id="open"> Parcela 1 </button></a></th>
			<th><a href="parcela2.php"><button id="open"> Parcela 2 </button></a></th>
		</tr>
		<tr>
			<th><a href="parcela3.php"><button id="open"> Parcela 3 </button></a></th>
			<th><a href="parcela4.php"><button id="open"> Parcela 4 </button></a></th>
		</tr>
		<tr>
			<th><a href="parcela5.php"><button id="open"> Parcela 5 </button></a></th>
			<th><a href="parcela6.php"><button id="open"> Parcela 6 </button></a></th>
		</tr>
		<tr>
			<th><a href="parcela7.php"><button id="open"> Parcela 7 </button></a></th>
			<th><a href="parcela8.php"><button id="open"> Parcela 8 </button></a></th>
		</tr>
		<tr>
			<th><a href="parcela9.php"><button id="open"> Parcela 9 </button></a></th>
			<th><a href="parcela10.php"><button id="open"> Parcela 10 </button></a></th>
		</tr>
		<tr>
			<th><a href="parcela11"><button id="open"> Parcela 11</button></a></th>
		</tr>
	</table>
</div>
</div>
<div>

</div>
</body>
</html>