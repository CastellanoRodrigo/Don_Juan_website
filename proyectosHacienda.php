<?php #Llammo a pie 
include('./template/Cabecera.php');
include('./modelo/conexion.php');

$consulta = ConsultarIncidente($_GET['no']);

function ConsultarIncidente($no_tic)
{	
	$conexion=mysqli_connect('localhost:3307', 'root', '', 'sistema_dj') or exit('No se puede conectar con la base de datos');
	$sentencia =  "SELECT * FROM parcela WHERE Id_Parcela='".$no_tic."'";
	$resultado = mysqli_query($conexion, $sentencia);
	$filas = mysqli_fetch_assoc($resultado);
	return [
		$filas['Id_Parcela'],/*0*/
		$filas['CantidadHectareas'],/*1*/
	];
}

?>

<center>
<a href="./detalleHacienda.php">Volver atras</a>
<br/>
<br/>
<div>
    <?php
    $valor = $consulta[0];
echo "<table>
        <thead>
            <tr>
                <th style='width: 200px;'><p>PROYECTO</p></th>
                <th><p>HECTAREAS</p></th>
                <th style='width: 200px;'><p>ESTADO</p></th>
                <th><p>MODIFICAR</p></th>
            </tr>
        </thead>
    ";
                $consulta=mysqli_query($conexion, "SELECT p.Id_Parcela, p.NombreProyecto, p.Estado, d.CantidadHectareas, p.Id_ProyectoHacienda
                FROM proyectohacienda p
                LEFT JOIN detalleinicialhacienda d ON d.id_ProyectoHacienda = p.id_ProyectoHacienda
                WHERE p.Id_Parcela = $valor
                ORDER BY p.Id_ProyectoHacienda ASC
            ");
                while($listar = mysqli_fetch_array($consulta)) 
                {
                    echo
                    " 
                        <tr>
                        
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$listar['NombreProyecto']."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$listar['CantidadHectareas']."</h4 ></td>
                        <td><h4 style='font-size:16px; text-align:center; margin-left: 5px;'>".$listar['Estado']."</h4 ></td>
                        <td class='text-center text-nowrap'><a class='btn btn-sm btn-outline-primary' href=./altaDetallesProyectoHacienda.php?no=".$listar['Id_ProyectoHacienda']." class=mod><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                        </svg></a></td>
                        </tr>
                    ";
                  }
            
                  echo "</table>";?>

</div>
                </center>
