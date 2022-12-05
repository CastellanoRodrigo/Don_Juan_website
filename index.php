<?php
session_start();
#controlamos el ingreso, si trata de acceder manualmente por url 
#lo redirige al login
if (empty($_SESSION["id"])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="estilos.css">
	<title>Menu de Navegacion estilo Amazon</title>
</head>
<body>
	<nav class="menu" id="menu">
		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>

		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos" id="btn-departamentos">
				<p>DON JUAN SRL <span>GAFA</span></p>
				<i class="fas fa-caret-down"></i>
				  <!--Usuario Logueado-->
				  <div class="button">
                    <div class=".text-light">
                        <?php
                        echo $_SESSION["nombre"] . " " . $_SESSION["apellido"];
                        ?>
                    </div>
                </div>
			</div>

			<div class="enlaces">
				<a href="#">Proyectos</a>
				<a href="#">Detalles</a>
				<a href="#">Usuarios</a>
				<a href="#">Nosotros</a>
				<a href="#">Nosotros</a>
			</div>
		</div>
<!--Menu Nav-->
		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">GAFA</h3>

					<a href="#" data-categoria="tecnologia-y-computadoras">Proyectos <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="libros">Arrendamiento <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="ropa-y-accesorios">Compras y Gastos <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hogar-y-cocina">Usuarios <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="juegos-y-juguetes">Nosotros <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="salud-y-belleza">Proyecciones <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="alimentos-y-bebidas">Documentos <i class="fas fa-angle-right"></i></a>
				</div>
				<!--     Proyectos      -->
				<div class="contenedor-subcategorias">
					<div class="subcategoria " data-categoria="tecnologia-y-computadoras">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Proyectos</h3>
							<a href="/altaProyectoHacienda.php">Alta de hacienda</a>
							<a href="/altaProyectoSiembra.php">Alta siembra</a>
							<a href="/detalleHacienda.php">Detalle inicial Hacienda</a>
							<a href="/detalleSiembra.php">Detalle inicial Siembra</a>
							<a href="#">Modificar</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./imgs/agroganaderia.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./imgs/maiz.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/ganaderia2.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/ganaderia.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/trigo.png" alt="">
							</a>
						</div>
					</div>
				<!--    Arrendamiento     -->
					<div class="subcategoria" data-categoria="libros">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Arrendamiento</h3>
							<a href="#">Carga de contrato</a>
							<a href="#">Informacion</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./imgs/campos.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./imgs/parcelas.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/parcelas3.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/parcelas2.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/parcelas1.png" alt="">
							</a>
						</div>
					</div>
				<!--   Compras y Ventas    -->
					<div class="subcategoria" data-categoria="ropa-y-accesorios">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Compras y Ventas </h3>
							<a href="#">Gastos por proyecto</a>
							<a href="#">Gastos arrendamiento</a>
							<a href="#">Subir documentos</a>							
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./imgs/compras.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./imgs/compras2.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/compras3.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/compras4.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/compras5.png" alt="">
							</a>
						</div>
					</div>
					<!--     Usuarios      -->
					<div class="subcategoria" data-categoria="hogar-y-cocina">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Usuarios</h3>
							<a href="/Usuarios.php">Alta de usuario</a>
							<a href="/eliminarUsuario.php">Baja de usuario</a>
							<a href="/modificarUsuario.php">Modificar usuario</a>
						
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./imgs/usuarios1.jpg" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./imgs/usuario4.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/usuarios2.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/usuario6.png" alt="">
							</a>
							<a href="#">
								<img src="./imgs/usuarios4.jpg" alt="">
							</a>
						</div>
					</div>
					<!--      Nosotros       -->
					<div class="subcategoria" data-categoria="juegos-y-juguetes">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Nosotros</h3>
							<a href="/Nosotros.php">Quienes somos </a>
							<a href="#">Avance de GAFA</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/juegos-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/juegos-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/juegos-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/juegos-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/juegos-galeria-4.png" alt="">
							</a>
						</div>
					</div>
					<!--     Proyecciones      -->
					<div class="subcategoria" data-categoria="salud-y-belleza">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Proyecciones</h3>
							<a href="#">Comparacion anual</a>
							<a href="#">Ganancias</a>
							<a href="#">Dolar</a>
							<a href="#">Clima</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./imgs/proyecciones3.jpg" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./imgs/proyecciones1.jpg" alt="">
							</a>
							<a href="#">
								<img src="./imgs/proyecciones2.jpg" alt="">
							</a>
							<a href="#">
								<img src="./imgs/proyecciones4.jpg" alt="">
							</a>
							<a href="#">
								<img src="./imgs/proyecciones6.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="alimentos-y-bebidas">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">DOCUMENTOS</h3>
							<a href="#">Alimentos</a>
							<a href="#">Bebidas</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="./img/comida-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="./img/comida-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="./img/comida-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="./img/comida-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="./img/comida-galeria-4.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<main class="contenedor">
		<article> <!-- Contenido parcelas -->

		<div style="text-align:center;">
		<table border="1" style="margin: 0 auto;">

			<h1>INFORMACION DE LAS PARCELAS</h1><br>
			<div class="containerMap">
				<!--division  por parcelas 
				• Parcela 1: 43 hectáreas.
				• Parcela 2: 90 hectáreas.
				• Parcela 3: 100 hectáreas.
				• Parcela 4: 70 hectáreas.
				• Parcela 5: 100 hectáreas.
				• Parcela 6: 70 hectáreas.
				• Parcela 7: 100 hectáreas.
				• Parcela 8: 35 hectáreas.
				• Parcela 9: 65 hectáreas.
				• Parcela 10: 95 hectáreas.
				• Parcela 11: 30 hectáreas.-->

				<map name="mapa">
					<img src="./imagenes/DonJuanSRL1-MARCADA.png" usemap="#mapa">
					<area id="area1" class="area" shape="rectangle" coords="494, 690 333, 626" href="/Parcelas/parcela1.php" title="Parcela 1 [43ha]"></area>
					<area id="area2" shape="rectangle" coords="333, 626 497, 478" class="area" href="/Parcelas/parcela2.php" title="Parcela 2 [90ha]">
					<area id="area" shape="rectangle" coords="494, 527 657, 367" class="area" href="/Parcelas/parcela3.php" title="Parcela 3 [100ha]">
					<area id=" area" shape="rectangle" coords="497, 478 334, 365" class="area" href="/Parcelas/parcela4.php" title="Parcela 4 [70ha]">
					<area id="area" shape="rectangle" coords="170, 481 331, 690" class="area" href="/Parcelas/parcela5.php" title="Parcela 5 [100ha]">
					<area id="area" shape="rectangle" coords="334, 365 170, 481" class="area" href="/Parcelas/parcela6.php" title="Parcela 6 [70ha]">
					<area id="area" shape="rectangle" coords="426, 365 667, 251" class="area" href="/Parcelas/parcela7.php" title="Parcela 7 [100ha]">
					<area id="area" shape="rectangle" coords="426, 365 342, 247" class="area" href="/Parcelas/parcela8.php" title="Parcela 8 [35ha]">
					<area id="area" shape="rectangle" coords="342, 247 429, 38" class="area" href="/Parcelas/parcela9.php" title="Parcela 9 [65ha]">
					<area id="area" shape="rectangle" coords="429, 38 542, 250" class="area" href="/Parcelas/parcela10.php" title="Parcela 10 [95ha]">
					<area id="area1" class="area" shape="rectangle" coords="347, 38 257, 163" href="/Parcelas/parcela11.php" title="Parcela 11 [30ha]">
					<br><br><br><br><br>
				</map>
			</div>
		</table>
	</div>
	</div>
	<div>

	</div>

		</article>
	</main>
	<!--  Fin del menu -->
	
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script src="main.js"></script>
</body>
</html>