<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

<title>Inicio</title>
        
        <section>
            <div class="Espacio"></div>
            <div class="Cover2">
                <div class="ImagenParcela">
                    <h1> PARCELAS </h1>
                </div>
            </div>
        </section>
        <div>
        
        

            <div> 
                <button class="btn btn-dark mx-2 mt-2" data-bs-toggle="offcanvas" data-bs-target="#intro">Administrar Parcelas</button> 
                <div class="offcanvas offcanvas-start" id="intro">
                    <div class="offcanvas-header">
                        <div class="offcanvas-title">
                            <button class="btn btn-danger" data-bs-dismiss="offcanvas">Cerrar</button>
                            
                        </div>
                    </div>

                    <div class="offcanvas-body">
                        <button class="btn btn-dark p1">Añadir proyecto de hacienda</button><br>
                        <button class="btn btn-dark">Añadir proyecto de siembra</button><br>
                        <button class="btn btn-dark">Modificar Proyecto</button><br>
                        <button class="btn btn-dark">Finalizar Proyecto</button>

                    </div>
                </div>
                <!-- Onclick= nos lleva al formulario de carga            
                <button class="BotonAñadir" id="open" onclick="location.href='altaProyectoHacienda.php'"> AÑADIR CAMPAÑA DE HACIENDA</button>
                <button class="BotonAñadir2" id="open" onclick="location.href='altaProyectoSiembra.php'"> AÑADIR CAMPAÑA DE SIEMBRA</button>
                 <button class="BotonModificar"> MODIFICAR CAMPAÑA </button>
                <button class="BotonEliminar"> ELIMINAR CAMPAÑA </button> --> 
            </div>
        
            <div>
            <table border="1" style="margin: 0 auto;">

	
<h1>INFORMACION DE LAS PARCELAS</h1><br>
<div class="containerMap">
<!--division  por parcelas -->
<map name="mapa">
<img src="./imagenes/DonJuanSRL1-MARCADA.png" usemap="#mapa">
    <area id="area1" class="area" shape="rectangle" coords="494, 690 333, 626" href="parcela1.php" >
    <area id="area2" shape="rectangle" coords="333, 626 497, 478" class="area" href="parcela2.php" >
    <area id="area" shape="rectangle" coords="494, 527 657, 367" class="area" href="parcela3.php" ">
    <area id="area" shape="rectangle" coords="497, 478 334, 365" class="area" href="parcela4.php" >
    <area id="area" shape="rectangle" coords="170, 481 331, 690" class="area" href="parcela5.php" >
    <area id="area" shape="rectangle" coords="334, 365 170, 481" class="area" href="parcela6.php" >
    <area id="area" shape="rectangle" coords="426, 365 667, 251" class="area" href="parcela7.php" >
    <area id="area" shape="rectangle" coords="426, 365 342, 247" class="area" href="parcela8.php" >
    <area id="area" shape="rectangle" coords="342, 247 429, 38" class="area" href="parcela9.php" >
    <area id="area" shape="rectangle" coords="429, 38 542, 250" class="area" href="parcela10.php" >
    <area id="area1" class="area" shape="rectangle" coords="347, 38 257, 163"  href="parcela11.php" >
</map>
</div>
</div>

</table>

        <?php #Llammo a pie 
include('./template/pie.php');?>
 