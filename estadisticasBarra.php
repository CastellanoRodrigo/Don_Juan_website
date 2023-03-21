<?php
include('./Template/Cabecera.php');
//require_once "../includes/_db.php";
$host = "localhost:3307";
$user = "root";
$password = "";
$database = "sistema_dj";
$conexion = mysqli_connect($host, $user, $password, $database);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          //['Task', 'Hours per Day'], // este de dos parametros funciona
          //['Task', 'Hours per Day', 'pelele'], //funciona con tres parametros corresponde con el de 3 param de abajo
          ['Year', 'Sales', 'Expenses', 'Profit'], // cuatro parametros
          //['NombreProyecto', 'CantidadHectareas', 'RindeEspeculado', 'InversionInicial'],
          //['2014', 1000, 400, 200],
          //['2015', 1170, 460, 250],
          //['2016', 660, 1120, 300],
          //['2017', 1030, 540, 350] esto es lo q aparce en el google como ejemplo

          // echo "['" .$resultado['NombreProyecto']."', " .$resultado['RindeEspeculado'].'" .$resultado['CantidadHectareas']."''" .$resultado['NombreProyecto']."'"],";
          <?php
            // este if no se si va no seria necesario sabemos q la conexion funciona
            //if (mysqli_num_rows($conexion) > 0);

            //while ($row= mysqli_fetch_array($conexion)){
            //  echo "['".$row['NombreProyecto']."','".$row['CantidadHectareas']."', '".$row['RindeEspeculado']"','".$row['InversionInicial']."']],";

            //}

          $SQL = "SELECT * FROM detalleinicialsiembra d 
          INNER jOIN ProyectoSiembra s ON s.Id_ProyectoSiembra = d.Id_ProyectoSiembra";

          $consulta = mysqli_query($conexion, $SQL);
          while ($resultado = mysqli_fetch_assoc($consulta)){ 
           //echo "['" .$resultado['NombreProyecto']."', " .$resultado['RindeEspeculado']."],"; //este funciona con dos parametros
           //este de aca abajo con tres parametros funciona bien
           //echo "['" .$resultado['NombreProyecto']."', " .$resultado['RindeEspeculado']."," .$resultado['CantidadHectareas']."],";
           echo "['" .$resultado['NombreProyecto']."', " .$resultado['RindeEspeculado']."," .$resultado['InversionInicial']."," .$resultado['CantidadHectareas']."],";
           //" .$resultado['RindeEspeculado']."
          }
          ?>

        ]);

        var options = {
          chart: {
            title: 'Estadisticas de Rinde Obtenido',
            subtitle: 'Todavia no se cargo se muestra Rinde Especulado',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>
