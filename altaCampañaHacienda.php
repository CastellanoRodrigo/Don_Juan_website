<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Alta campaña de hacienda</title>
</head>

<body>
  <!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>

<h2>Dar de alta nueva campaña de hacienda:</h2>

 <center>
 <table>
 <tr>
  <td style="height: 47px; width: 264px;">
   Nombre de la campaña:</td>
  <td style="width: 366px; height: 47px">
   <form method="post">
	   <input name="txtNombreCampaña" style="width: 127px; height: 30px" type="text" required="required" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Fecha de inicio:</td>
  <td style="width: 366px">
   <form method="post">
	   <input name="txtFechaInicio" type="text"  required="required" class="auto-style1" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Cantidad de Cabezas:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCantidadCabezas" type="text" required="required" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Parcelas involucradas:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtParcelasInvolucradas" type="text" required="required" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Cantidad de hectareas utilizadas:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCantHectareas" type="text" required="required"  style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td style="width: 264px">
   Fecha de cierre aproximado:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtFechaCierreAprox" type="text" required="required" style="height: 30px; width: 127px" /></form>
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
   <input type="button" value="Crear campaña" style="width: 101px">&nbsp;
   <input   type="reset" value="Cancelar" style="width: 83px" ></td>
 </tr>
</table>
</center>

 
</body>

</html>
