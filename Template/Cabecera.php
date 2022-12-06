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
							<a href="./altaProyectoHacienda.php">Alta de hacienda</a>
							<a href="./altaProyectoSiembra.php">Alta siembra</a>
							<a href="./detalleHacienda.php">Detalle inicial Hacienda</a>
							<a href="./detalleSiembra.php">Detalle inicial Siembra</a>
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
							<a href="./Usuarios.php">Alta de usuario</a>
							<a href="./eliminarUsuario.php">Baja de usuario</a>
							<a href="./modificarUsuario.php">Modificar usuario</a>
						
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
