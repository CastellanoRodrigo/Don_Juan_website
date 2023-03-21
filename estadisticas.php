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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
<?php
          // $SQL seria la $consulta es el nombre de la variable que le di
          //$SQL = "SELECT * FROM detalleinicialsiembra";
          $SQL = "SELECT * FROM detalleinicialsiembra d 
                  INNER jOIN ProyectoSiembra s ON s.Id_ProyectoSiembra = d.Id_ProyectoSiembra";

          $consulta = mysqli_query($conexion, $SQL);
          while ($resultado = mysqli_fetch_assoc($consulta)){
            //echo "['" .$resultado['nombre']."', " .$resultado['edad']."],";
            //echo "['" .$resultado['Id_ProyectoSiembra']."', " .$resultado['RindeEspeculado']."],";
            echo "['" .$resultado['NombreProyecto']."', " .$resultado['RindeEspeculado']."],";
          }

?>
        ]);

        var options = {        
          title: 'Estadisticas de Rinde Especulado - Deberia ser RINDE OBTENIDO '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
