<?php
#conexion a base de datos, creando la variable "conexion"
#en localhost, al subir a prod,se coloca la dir ip, seguido del usuario,contraseña y la base de datos
$conexion=new mysqli("localhost:3307","root","","sistema_dj"); 
//$conexion=new mysqli("localhost","root","","sistema_dj");
$conexion->set_charset("utf8");

?>
