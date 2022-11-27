<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

<title>Alta Usuario</title>

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
<h2>Dar de alta un nuevo usuario:</h2>
</center>
<form method="post">
 <center>
 <table>
 <tr>
  <td style="height: 47px; width: 264px;">
   Nombre de Usuario:</td>
  <td style="width: 366px; height: 47px">
   
	   <input name="txtUsuario" style="width: 127px; height: 30px" type="text" required />
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Password:</td>
  <td style="width: 366px"> 
	   <input name="txtPassword" type="text" class="auto-style1" style="height: 30px; width: 127px" required />
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Nombre:</td>
  <td style="width: 366px">
	   <input name="txtNombre" type="text" class="auto-style1" style="height: 30px; width: 127px" required />
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Apellido:</td>
  <td style="width: 366px">
   
	   <input name="txtApellido" type="text" class="auto-style1" style="height: 30px; width: 127px" required />
	 </td>
 </tr>
 <tr>
  <td style="width: 264px; height: 69px;">
   Tipo de usuario:</td>
   <td style="width: 366px; height: 69px;">
     		 
		 <?php
	     $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
		 ?>	 
		 
		<select  name="cmbTipoUsuario" style="width: 120px; height: 28px;" required>
  
        <option name="cmbTipoUsuario" value="">Seleccionar</option>
  
        <?php
  
          $query = $mysqli -> query ("SELECT * FROM tipo_usuario ");
  
          while ($valores = mysqli_fetch_array($query)) {
  
            echo '<option value="'.$valores['id'].'">'.$valores['tipo'].'</option>';
  
          }
  
        ?>
	  
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
   <input type="submit" value="Crear usuario">
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
     $usuario=$_POST['txtUsuario'];
     $password=$_POST['txtPassword'];
     $nombre=$_POST['txtNombre']; 
     $apellido=$_POST['txtApellido'];
     $tipo=$_POST['cmbTipoUsuario'];
     
      //cadena que agrega el regsitro osea la fila a la tabla CampaÃ±aHacienda
        $cad = "INSERT INTO usuarios(usuario, password, nombre, apellido, tipo_usuario) VALUES ('$usuario','$password','$nombre','$apellido', '$tipo')";
        
        // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje que fue dado de alta
       echo "El Proyecto fue dado de alta con exito";
      
  // cierra la conexion   
    $cn->close();
  }
?>

<?php #Llammo a pie 
include('./template/pie.php');?>