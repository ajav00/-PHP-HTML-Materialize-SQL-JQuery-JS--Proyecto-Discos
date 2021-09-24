<?php
/// Powered by Evilnapsis go to http://evilnapsis.com
include_once("Seguridad.php");

$nombre = $_SESSION['Nombre_cli']." ".$_SESSION['Apellido_cli'];
$dir =$_SESSION['Direccion_cli'];
$tel = $_SESSION['Celular_cli'];
$email = $_SESSION['Correo_cli'];
$Titulo = array_column($_SESSION['CARRITO'], 'Nombre');
$Id = array_column($_SESSION['CARRITO'], 'Id');
$Cantidad = array_column($_SESSION['CARRITO'], 'Cantidad');
$Precio = array_column($_SESSION['CARRITO'], 'Precio');

include "fpdf/fpdf.php";


$pdf = new FPDF($orientation='P',$unit='mm');
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);    
$textypos = 5;
$pdf->setY(12);
$pdf->setX(10);
// Agregamos los datos de la empresa
$pdf->Cell(5,$textypos,"WATERLOO SUNSET");
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(10);
$pdf->Cell(5,$textypos,"DATOS DE LA EMPRESA:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(10);
$pdf->Cell(5,$textypos,"Waterloo Sunset");
$pdf->setY(40);$pdf->setX(10);
$pdf->Cell(5,$textypos,"Bolognia - Irpavi, La Paz - Bolivia");
$pdf->setY(45);$pdf->setX(10);
$pdf->Cell(5,$textypos,"+591 7041937");
$pdf->setY(50);$pdf->setX(10);
$pdf->Cell(5,$textypos,"WaterlooSunset@music.com");

// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(75);
$pdf->Cell(5,$textypos,"COMPRADOR:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(75);
$pdf->Cell(5,$textypos, $nombre);
$pdf->setY(40);$pdf->setX(75);
$pdf->Cell(5,$textypos, $dir);
$pdf->setY(45);$pdf->setX(75);
$pdf->Cell(5,$textypos, $tel);
$pdf->setY(50);$pdf->setX(75);
$pdf->Cell(5,$textypos, $email);

// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Reporte");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Fecha: ".date('d/m/Y'));
$pdf->setY(40);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Vencimiento: 31/12/2020");
$pdf->setY(45);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");
$pdf->setY(50);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");

/// Apartir de aqui empezamos con la tabla de productos
$pdf->setY(60);$pdf->setX(135);
    $pdf->Ln();
/////////////////////////////
//// Array de Cabecera
$header = array("Nro.", "Titulo","Cant.","Precio","Total");




//// Arrar de Productos
/*$products = array(
	array("0010", "Producto 1",2,120,0),
	array("0024", "Producto 2",5,80,0),
	array("0001", "Producto 3",1,40,0),
	array("0001", "Producto 3",5,80,0),
	array("0001", "Producto 3",4,30,0),
	array("0001", "Producto 3",7,80,0),
);*/
    // Column widths
    $w = array(20, 95, 20, 25, 25);
    // Header
    for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C');
    $pdf->Ln();
    // Data
    $total = 0;
    //foreach($_SESSION['CARRITO'] as $indice => $producto){
    for($i=0; $i<count($Titulo); $i++)
    {
        $pdf->Cell($w[0],6,$Id[$i],1);
        $pdf->Cell($w[1],6,$Titulo[$i],1);
        $pdf->Cell($w[2],6,number_format($Cantidad[$i]),'1',0,'R');
        //$pdf->Cell($w[3],6,"Bs. ".number_format($Precio[$i],'Cantidad',".",","),'1',0,'R');
        $pdf->Cell($w[3],6,"Bs. ".$Precio[$i].".00", 1);
        $pdf->Cell($w[4],6,"Bs. ".number_format($Precio[$i]*$Cantidad[$i],2,".",","),'1',0,'R');

        $pdf->Ln();
        $total+=$Precio[$i]*$Cantidad[$i];

    }
/////////////////////////////
//// Apartir de aqui esta la tabla con los subtotales y totales
$yposdinamic = 60 + (count($Titulo)*10);

$pdf->setY($yposdinamic);
$pdf->setX(235);
    $pdf->Ln();
/////////////////////////////
$header = array("", "");
$data2 = array(
	array("Subtotal",$total),
	array("Descuento", 0),
	array("Impuesto", 0),
	array("Total", $total),
);
    // Column widths
    $w2 = array(40, 40);
    // Header

    $pdf->Ln();
    // Data
    foreach($data2 as $row)
    {
$pdf->setX(115);
        $pdf->Cell($w2[0],6,$row[0],1);
        $pdf->Cell($w2[1],6,"Bs. ".number_format($row[1], 2, ".",","),'1',0,'R');

        $pdf->Ln();
    }
/////////////////////////////

$yposdinamic += (count($data2)*10);
$pdf->SetFont('Arial','B',10);    

$pdf->setY($yposdinamic);
$pdf->setX(10);
$pdf->Cell(5,$textypos,"TERMINOS Y CONDICIONES");
$pdf->SetFont('Arial','',10);    

$pdf->setY($yposdinamic+10);
$pdf->setX(10);
$pdf->Cell(5,$textypos,"El cliente se compromete a pagar la factura. Caso contrario se tomaran las medidas legales correspondientes");



$pdf->output();