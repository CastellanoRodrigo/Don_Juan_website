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
                <button class="BotonAñadir" id="open" onclick="location.href='altaCampañaHacienda.php'"> AÑADIR CAMPAÑA DE HACIENDA</button>
                <button class="BotonAñadir2" id="open" onclick="location.href='altaCampañaSiembra.php'"> AÑADIR CAMPAÑA DE SIEMBRA</button>
                    <!-- <div id="modal_container" class="modal-container">

---  Comente este codigo porque nunca funciono,
                            No como vos maty que me cagaste el nombre de la persona que estaba logueada, forro entabacado de mierda espero me leas xD ---


                            <div class="modal">
                            <h1>Descripcion de Parcela 1</h1>
                            <p> Fecha de Creacion: 12 de Enero del 2021 </p>
                            <p> Nombre de la campaña: Trigo 2022 </p>
                            <p> Cantidad de hectarias: 800 hectareas </p>
                            <p> Tipo de cultivo: Trigo </p>
                            <p> Rendimiento especulado: 360 Tons. </p>
                            <button id="close">Cerrar</button>
                        </div>
                        
                    </div> 
                    <script src="../JavaScript/Popup.js"></script>     -->      
                <button class="BotonModificar"> MODIFICAR CAMPAÑA </button>
                <button class="BotonEliminar"> ELIMINAR CAMPAÑA </button>
            </div>
        
            <div>
                <table align="center">
                    <tr>
                        <th><a href="CargaCampaña.php"><button id="open"> Parcela 1 </button></a></th>
                        <th><a href="CargaCampaña.php" target="_blank"><button id="open"> Parcela 2 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="CargaCampaña.php"><button id="open"> Parcela 3 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 4 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 5 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 6 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 7 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 8 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 9 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 10 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 11</button></a></th>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <h1>INFORMACION DE LAS PARCELAS</h1>
        </div>

        <?php #Llammo a pie 
include('./template/pie.php');?>
 