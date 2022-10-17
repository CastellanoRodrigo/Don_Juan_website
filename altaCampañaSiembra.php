<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Alta campaña de Siembra</title>
</head>

<body>

 <!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>

<h2>Dar de alta nueva campaña de siembra:</h2>

 <center>
 <table>
 <tr>
  <td style="height: 47px; width: 226px;">
   Nombre de la campaña:</td>
  <td style="width: 366px; height: 47px">
   <form method="post">
	   <input name="txtNombreCampaña" style="width: 127px; height: 30px" type="text" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 226px">
   Fecha de inicio:</td>
  <td style="width: 366px">
   <form method="post">
	   <input name="txtFechaInicio" type="text" class="auto-style1" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 226px; height: 42px;">
   Tipo de cultivo:</td>
  <td style="width: 366px; height: 42px;">
	   <input name="txtTipoCultivo" type="text" class="auto-style1" style="height: 30px; width: 127px" /></td>
 </tr>
 <tr>
  <td style="width: 226px">
   Cantidad de hectareas sembradas:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCantHectareasSembradas" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 226px">
   Rinde especulado:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtRindeEspeculado" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 226px">
   Fecha de cierre aproximado:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtFechaCierreAprox" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 226px; height: 32px;">
   Notas:</td>
   <td style="width: 366px; height: 32px;">
     <form method="post" style="height: 49px">
		 <input name="txtNota" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 226px">
   <input type="button" value="Crear campaña" style="width: 101px">&nbsp;
   <input   type="reset" value="Cancelar" style="width: 83px" ></td>
 </tr>
</table>
</center>

</body>

</html>
