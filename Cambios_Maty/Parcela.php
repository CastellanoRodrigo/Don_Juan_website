<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PARECELAS</title>
</head>
<body>
   <div class="head">      
        <div class="logo">
            <img src="img/Gafa.jpg"></i>
        </div>

        <nav class="navbar">
            <a href="Parcela.php">Inicio</a>
            <a href="Consultas.php">Consulta</a>
            <a href="Usuarios.php">Usuarios</a>
            <a href="#">Salir</a>
        </nav>
   </div>

   <header class="content header" id="Portada_PA">
       <h1 id="TituloPrincipal">Parcelas</h1>
   </header>

   <section class="sau"> <!--class="content sau"-->
        <div id="ContenedorBotones" class="sau">
            <button class="BotonesCampaña" id="open" onclick="location.href='altaCampañaHacienda.php'"> AÑADIR CAMPAÑA DE HACIENDA</button>
            <button class="BotonesCampaña" id="open" onclick="location.href='altaCampañaSiembra.php'"> AÑADIR CAMPAÑA DE SIEMBRA</button>
            <button class="BotonesCampaña"> MODIFICAR CAMPAÑA </button>
            <button class="BotonesCampaña"> ELIMINAR CAMPAÑA </button>
        </div>
        <div class="BotonParcelas">
            <a class="Boton11" href="CargaCampaña.php"><button id="open"> 11 </button></a>
            <a class="Boton9" href="CargaCampaña.php"><button id="open"> 9 </button></a>
            <a class="Boton10" href="CargaCampaña.php"><button id="open"> 10 </button></a>
        </div>
        <div class="BotonParcelas">
            <a class="BotonInvisible"></a>
            <a class="Boton8" href="CargaCampaña.php"><button id="open"> 8 </button></a>
            <a class="Boton7"href="CargaCampaña.php"><button id="open"> 7 </button></a>
        </div>
        <div class="BotonParcelas">
            <a class="Boton6" href="CargaCampaña.php"><button id="open"> 6 </button></a>
            <a class="Boton4"href="CargaCampaña.php"><button id="open"> 4 </button></a>
            <a class="Boton3"href="CargaCampaña.php"><button id="open"> 3 </button></a>
            <a class="BotonInvisible2"></a>
        </div>
        <div class="BotonParcelas">
            <a class="Boton5" href="CargaCampaña.php"><button id="open"> 5 </button></a>
            <a class="Boton2"href="CargaCampaña.php"><button id="open"> 2 </button></a>
            <a class="BotonInvisible3"></a>
        </div>
        <div class="BotonParcelas">
            <a class="Boton1" href="CargaCampaña.php"><button id="open"> 1 </button></a>
            <a class="BotonInvisible4"></a>
        </div>
        <div>
            <a class="BotonInvisible5"></a>
        </div>
   </section>
   <section class="content aboutDESCRIPCION">
        <h2 class="title" id="TituloNosotrosPA">Descripcion</h2>
        <div class="box-container2">

            <div class="box">
                <h3>Imagen de parcela</h3>
            </div>

            <div class="box">
                <h3>Descripcion</h3>
                <div>
                    <p>Hola</p>
                </div>
            </div>
        </div>       
   </section>

   <div class="contact contentPIE"> 
        <nav class="navbarPIE">
            <a href="Parcela.php">Inicio</a>
            <a href="Consultas.php">Consulta</a>
            <a href="Usuarios.php">Usuarios</a>
        </nav>
        <div>
            <a href="QuienesSomos.php" class="titlePIE">Quienes somos</a>
        </div>  
    </div>
    
</body>
</html>