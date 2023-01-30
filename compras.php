<?php #Llammo a pie 
include('./template/Cabecera.php');?>
<!--codigo aca-->

<title>Compra Hacienda</title>
<!-- Body -->

<form method="post"> 
<center>
<table>
 <tr>
  <td style="height: 47px">
   Fecha:</td>
  <td style="width: 366px; height: 47px">
	   <input name="txtFecha" style="width: 127px; height: 30px" type="text" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Tipo de Factura:</td>
  <td style="width: 366px">
     <select  name="cmbTipoFactura" style="height: 30px; width: 127px;" required> 
        <option  value="" disabled selected >Seleccionar</option>
        <option  value="A">A</option>
        <option value="B" >B</option>
        <option value="C" >C</option>
        <option value="Otro" >Otro</option>
	 </td>
 </tr>
 <tr>
  <td>
   Punto de Venta:</td>
   <td style="width: 366px">
		 <input name="txtPuntoVenta" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Nro de Factura:</td>
   <td style="width: 366px">
		 <input name="NroFactura" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   tipo de Documento Emisor:</td>
   <td style="width: 366px">
     <select  name="cmbTipoDoc" style="height: 30px; width: 127px;" required> 
        <option  value="" disabled selected >Seleccionar</option>
        <option  value="CUIT">CUIT</option>
        <option value="CUIL" >CUIL</option>
        <option value="DNI"  >DNI</option>
	 </td>
 </tr>
 <tr>
  <td>
   Nro de Documento Emisor:</td>
   <td style="width: 366px">
		 <input name="NroDocEmisor" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Proveedor:</td>
   <td style="width: 366px">
		 <input name="txtProveedor" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Tipo de cambio:</td>
   <td style="width: 366px">
		 <input name="txtCambio" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Moneda:</td>
   <td style="width: 366px">
     <select  name="cmbMoneda" style="height: 30px; width: 127px;" required> 
        <option  value="" disabled selected >Seleccionar</option>
        <option  value="USD">USD</option>
        <option value="$" >$</option>
	 </td>
 </tr>
 <tr>
  <td>
   Importe Neto:</td>
   <td style="width: 366px">
		 <input name="txtImporteNeto" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   IVA:</td>
   <td style="width: 366px">
		 <input name="txtIva" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Importe Total:</td>
   <td style="width: 366px">
		 <input name="txtImporteTotal" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Detalle:</td>
   <td style="width: 366px">
		 <input name="txtDetalle" type="text" style="height: 30px; width: 127px" required/>
	 </td>
 </tr>
 <tr>
  <td>
   Forma de Pago:</td>
   <td style="width: 366px">
     <select  name="cmbFormaPago" style="height: 30px; width: 127px;" required> 
        <option  value="" disabled selected >Seleccionar</option>
        <option  value="Efectivo">Efectivo</option>
        <option value="Transferencia" >Transferencia</option>
        <option value="Cheque"  >Cheque</option>
        <option value="Se debe"  >Se debe</option>
	 </td>
 </tr>
 <tr>
  <td>
   Tipo de Compra:</td>
   <td style="width: 366px">
     <select  name="cmbTipoCompra" style="height: 30px; width: 127px;" required> 
        <option  value="" disabled selected >Seleccionar</option>
        <option  value="General">General</option>
        <option value="Hacienda" >Hacienda</option>
        <option value="Siembra"  >Siembra</option>
	 </td>
 </tr>
 <tr>
  <td>
   <input type="submit" value="Cargar Compra" style="width: 110px">&nbsp;
   <input type="reset" value="Cancelar" style="width: 90px" ></td>
 </tr>
</table>
</center>
</form>

<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
    $cn= new mysqli("localhost:3307" , "root" ,"" , "sistema_dj" );

     // captura datos ingresados
     $fecha=$_POST['txtFecha'];
     $factura=$_POST['cmbTipoFactura'];  
     $puntoVenta=$_POST['txtPuntoVenta'];
     $nroFactura=$_POST['NroFactura'];
     $tipoDoc=$_POST['cmbTipoDoc'];
     $NroDoc=$_POST['NroDocEmisor'];
     $proveedor=$_POST['txtProveedor'];
     $cambio=$_POST['txtCambio'];
     $moneda=$_POST['cmbMoneda'];
     $importeNeto=$_POST['txtImporteNeto'];
     $iva=$_POST['txtIva'];
     $importeTotal=$_POST['txtImporteTotal'];
     $detalle=$_POST['txtDetalle'];
     $formaPago=$_POST['cmbFormaPago'];
     $tipoCompra=$_POST['cmbTipoCompra'];

        $cad = "INSERT INTO compras (Fecha, TipoFactura, PuntoDeVenta, NroFactura, TipoDocEmisor, NroDocEmisor, Proveedor, TipoCambio, Moneda, ImporteNeto, IVA, ImporteTotal, Detalle, FormaPago, TipoCompra)
                VALUES ('$fecha','$factura','$puntoVenta','$nroFactura','$tipoDoc','$NroDoc','$proveedor','$cambio','$moneda','$importeNeto','$iva','$importeTotal','$detalle','$formaPago', '$tipoCompra')";
       
      // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje
       echo "Compra registrada con éxito";
    //}
        
	  $cn->close();

	}

?>

<?php #Llammo a pie 
include('./template/pie.php');?>