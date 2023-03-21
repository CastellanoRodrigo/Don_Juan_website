<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

<form name="datos" action="modificarUsuario.php" method="post">
	<center>
	 <table style="width: 45%">
		 <tr>
			 <td style="width: 293px">Seleccione:</td>
			 <td><select name="lista" style="width: 185px;" required> 
    <?php
	   $cn= new mysqli("localhost:3307", "root", "", "donjuandb");
	   //$cn= new mysqli("localhost", "root", "", "sistema_dj");
	   $registros= $cn->query("select * from usuarios");

	   echo "<option disabled selected>Seleccione un usuario</option>"; //evita error del usuario CONTROL
	   // repetitiva que carga la lista con los nombres de los usuarios
	while ($myrow=$registros->fetch_array())
	     { 	  
	      echo "<option value='$myrow[id_usuario]'>" ;
          echo "$myrow[nombre]";
          echo "</option>";
          } $cn->close();	
   ?>
	 </select>
	 
	</td>
		 </tr>
		 <tr>
			 <td style="width: 293px">&nbsp;</td>
			 <td>&nbsp;</td>
		 </tr>
		 <tr>
			 <td style="width: 293px; height: 23px;">INGRESE LOS NUEVOS DATOS</td>
			 <td style="height: 23px"></td>
		 </tr>
		 <tr>
			 <td style="width: 293px">Nuevo nombre de usuario:</td>
			 <td><input type="text" value="" name="txtNuevoUsuario" required></td>
		 </tr>
    </td>
		 </tr>
		 <tr>
			 <td style="width: 293px">Asignar nueva password:</td>
			 <td><input type="text" value="" name="txtNuevaPassword" required></td>
		 </tr>
		 <tr>
			 <td style="width: 293px">Seleccionar tipo de usuario:</td>
			 <td>
			 <?php
	    		 $mysqli = new mysqli('localhost:3307', 'root', '', 'donjuandb');		
				 //$mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
		 	 ?>	 
		 
			  <select  name="cmbTipoUsuario" style="width: 120px; height: 28px;" required> 
                <option name="cmbTipoUsuario" value="">Seleccionar</option> 
             <?php
  
                $query = $mysqli -> query ("SELECT * FROM tipo_usuario ");
  
                while ($valores = mysqli_fetch_array($query)) {
  
                echo '<option value="'.$valores['id_tipoUsuario'].'">'.$valores['tipo'].'</option>'; 
                } 				
             ?>

			 </td>
		 </tr>
		 <tr>
			 <td style="width: 293px"></td>
			 <td></td>
		 </tr>
		 <tr>
			 <td style="width: 293px"></td>
			 <td>
			 <input type=submit value=Modificar style="width: 84px"> 
			 <input  type="reset" value="Cancelar" style="width: 83px">
			 </td>
		 </tr>
	 </table>
 	</center>   
 </form>
 
<?php
if (!empty ($_POST))  
	{
	 $cn= new mysqli("localhost:3307", "root", "", "donjuandb");
	 //$cn= new mysqli("localhost", "root", "", "sistema_dj");

	    $dato=$_POST['lista'];
	    $nuevoUsuario=$_POST['txtNuevoUsuario'];
	    $nuevaPass=$_POST['txtNuevaPassword'];
	    $tipoUsuario=$_POST['cmbTipoUsuario'];
	    
	    $sql="UPDATE usuarios SET usuario='$nuevoUsuario', password='$nuevaPass', id_tipoUsuario='$tipoUsuario'  WHERE id_usuario=$dato";
 
	$result=$cn->query($sql);
	
	echo "<center>";
	echo "El usuario de id=   ";
	echo $dato ;
	echo "     fue modificado "; 
	echo "</center>"; 
	}	 
?> 

<?php #Llammo a pie 
include('./template/Pie.php');?>
<!--codigo aca-->
