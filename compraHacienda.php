<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sin título 1</title>
<style type="text/css">
.auto-style1 {
	margin-bottom: 3px;
}
</style>
</head>

<body>

<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
      $cn= new mysqli("localhost" , "root" ,"" , "campodonjuan" );
     // captura datos ingresados
     $fecha=$_REQUEST['Fecha'];
     $vendedor=$_REQUEST['Vendedor'];  
     $cantCabezas=$_REQUEST['CantidadCabezas'];
     $kgTotal=$_REQUEST['KgTotal'];
     $kgPromedio=$_REQUEST['KgPromedio'];
     $precioCabeza=$_REQUEST['PrecioPorCabeza'];
     $precioBruto=$_REQUEST['PrecioBruto'];
     $costoTotal=$_REQUEST['CostoTotalCompra'];
         
     
     // Cadena que controla si el articulo existe
    // $sql="select  * from productos  where id= $dato ";
     // Ejecuta sentencia en sql
     // $re=$cn->query($sql);
      // controla cantidad de regsitros
     // $c=$re->num_rows; 
      //if ( $c==0)
     //{  //cadena que agrega el regsitro a la tabla En este caso la tabla HACIENDA poner bn el nombre
        $cad = "INSERT INTO hacienda (Fecha, Vendedor, CantidadCabezas,KgTotal,kgPromedio,PrecioPorCabeza,PrecioBruto,CostoTotalCompra) VALUES ($fecha,$vendedor,$cantCabezas,$kgTotal,$kgPromedio,$precioCabeza,$precioBruto,$costoTotal)";
        // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje
       echo "Compra registrada con éxito";
    //}
        
	 $cn->close();

	}

?>

<table>
 <tr>
  <td style="height: 47px">
   Fecha:</td>
  <td style="width: 366px; height: 47px">
   <form method="post">
	   <input name="txtFecha" style="width: 127px; height: 30px" type="text" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Vendedor:</td>
  <td style="width: 366px">
   <form method="post">
	   <input name="txtVendedor" type="text" class="auto-style1" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Cantidad de Cabezas:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCantidadCabezas" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Kg Totales:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtKgTotales" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Kg Promedio:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtKgPromedio" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Precio por Cabeza:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtPrecioCabeza" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Precio Bruto:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtPrecioBruto" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Costo Total de Compra:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCostoTotal" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   <input type="button" value="Cargar" style="width: 81px">&nbsp;
   <input   type="reset" value="Cancelar" style="width: 83px" ></td>
 </tr>
</table>



</body>

</html>
