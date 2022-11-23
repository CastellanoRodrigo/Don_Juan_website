<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

<title>Alta Proyecto de hacienda</title>

<body>
  <!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>
<br>
<br>
<br>
<br>
<center>
<h2>Dar de alta nuevo proyecto hacienda:</h2>
</center>
<form method="post">
 <center>
 <table>
 <tr>
  <td style="height: 47px; width: 264px;">
   Nombre del proyecto:</td>
  <td style="width: 366px; height: 47px">
   
	   <input name="txtNombre" style="width: 127px; height: 30px" type="text" />
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   ID del proyecto:</td>
  <td style="width: 366px">
   
	   <input name="txtId" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	 </td>
 </tr>
 <tr>
  <td style="width: 264px; height: 69px;">
   Parcelas involucradas:</td>
   <td style="width: 366px; height: 69px;">
     		 
		 <?php
	     $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
		 ?>	 
		 
		<select  name="cmbparcela" style="width: 120px; height: 28px;">
  
        <option name="cmbParcelas" value="0">Seleccionar</option>
  
        <?php
  
          $query = $mysqli -> query ("SELECT * FROM Parcela ");
  
          while ($valores = mysqli_fetch_array($query)) {
  
            echo '<option value="'.$valores['Id_Parcela'].'">'.$valores['Id_Parcela'].'</option>';
  
          }
  
        ?>
	  
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Estado:</td>
   <td style="width: 366px">
     <form method="post">		
		 <select name="cmbEstado" size="1"style="width: 120px; height: 28px">
                            <option value="0" selected="selected">Asignar Estado</option>
                            <option value="Iniciado">Iniciado</option>
                            <option value="Finalizado">Finalizado</option>                           
    </select>
                  
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   &nbsp;
   </td>
   <td style="width: 366px">
   </td>
 </tr>
 <tr>
  <td style="width: 264px">
   <input type="submit" value="Crear Campaña">
   <input  type="reset" value="Cancelar" style="width: 83px"></td>
 </tr>
</table>
</form>
</center>

<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
      $cn= new mysqli("localhost" , "root" ,"" , "sistema_dj" );
     // captura datos ingresados
     $idcamp=$_POST['txtId'];
     $parcela=$_POST['cmbparcela'];
     $nombre=$_POST['txtNombre']; 
     //$iddetalle=$_POST['txtIdDetalle'];
     $estado=$_POST['cmbEstado'];

     // Cadena que controla si hay una campaña creada con ese Id
     $sql="select  * from ProyectoHacienda  where Id_ProyectoHacienda= $idcamp";
     // Ejecuta sentencia en sql
      $re=$cn->query($sql);
      // controla cantidad de registros que existen en la tabla
      $c=$re->num_rows; 
      if ( $c==0)
     {  //cadena que agrega el regsitro osea la fila a la tabla CampañaHacienda
        $cad = "INSERT INTO ProyectoHacienda(Id_ProyectoHacienda, Id_Parcela, NombreProyecto, Estado) VALUES ('$idcamp','$parcela','$nombre','$estado')";
        // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje que fue dado de alta
       echo "El Proyecto fue dado de alta con exito";
    }
    else 
    {
      // mensaje que ya existe por lo tanto no fue dado de alta
      echo "Ya existe un proyecto con ese ID";
      //. mysql_error().":". mysql_error()."<br>";
     }
     
  // cierra la conexion   
 $cn->close();

}
?>

<?php #Llammo a pie 
include('./template/pie.php');?>