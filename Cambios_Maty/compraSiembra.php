<?php #Llammo a pie 
include('./template/Cabecera.php');?>
<!--codigo aca-->

<title>Compra Hacienda</title>
<!-- Body -->


<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
    $cn= new mysqli("localhost:3307" , "root" ,"" , "campodonjuan" );
      //$cn= new mysqli("localhost" , "root" ,"" , "campodonjuan" );
     // captura datos ingresados
     $fecha=$_REQUEST['txtFecha'];
     $factura=$_REQUEST['txtTipoFactura'];  
     $puntoVenta=$_REQUEST['txtPuntoVenta'];
     $nroFactura=$_REQUEST['NroFactura'];
     $tipoDoc=$_REQUEST['txtTipoDoc'];
     $NroDoc=$_REQUEST['NroDocEmisor'];
     $proveedor=$_REQUEST['txtProveedor'];
     $cambio=$_REQUEST['txtCambio'];
     $moneda=$_REQUEST['txtMoneda'];
     $importeNeto=$_REQUEST['txtImporteNeto'];
     $iva=$_REQUEST['txtIva'];
     $importeTotal=$_REQUEST['txtImporteTotal'];
     $detalle=$_REQUEST['txtDetalle'];
     $formaPago=$_REQUEST['txtFormaPago'];
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
   Tipo de Factura:</td>
  <td style="width: 366px">
   <form method="post">
	   <input name="txtTipoFactura" type="text" class="auto-style1" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Punto de Venta:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtPuntoVenta" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Nro de Factura:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="NroFactura" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   tipo de Documento Emisor:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtTipoDoc" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Nro de Documento Emisor:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="NroDocEmisor" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Proveedor:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtProveedor" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Tipo de cambio:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCambio" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>

 <tr>
  <td>
   Moneda:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtMoneda type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Importe Neto:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtImporteNeto" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   IVA:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtIva" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Importe Total:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtImporteTotal" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Detalle:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtDetalle" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Forma de Pago:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtFormaPago" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>

 <tr>
  <td>
   <input type="button" value="Cargar" style="width: 81px">&nbsp;
   <input   type="reset" value="Cancelar" style="width: 83px" ></td>
 </tr>
</table>


<?php #Llammo a pie 
include('./template/pie.php');?>