<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>
 
    <title>Consultas</title>
<!-- Body -->
<body>
<section class="home">
        <div class="BarraNavegacion">
            <img src="imagenes/Gafa.jpg">
            <nav>
                <a href="inicio.php"> Inicio </a>             
                <a href="Consultas.php"> Consultas </a>
                <a href="Usuarios.php"> Usuarios </a>
            </nav>
            <div>
                <button class="BotonSalir"> Salir </button>
            </div>
        </div>
    <section>
        <div class="Espacio"></div>
        <div class="Cover2">
            <div class="ImagenParcela">
                <h1> CONSULTAS </h1>
            </div>
        </div>
    </section>
    <section>
        <div>IMAGEN NUESTRA</div>
    </section>
    <section class="BarraInferior">
        <a href="Nosotros.php">Nosotros</a>
    </section>


<?php #Llammo a pie 
include('./template/pie.php');?>