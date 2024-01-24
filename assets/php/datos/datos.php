<?php
/// Powered by Evilnapsis go to http://evilnapsis.com
    require '../database.php';
    include "../../../admin/productos/fpdf/fpdf/fpdf.php";

$pdf = new FPDF($orientation='P',$unit='mm');
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);    
$textypos = 5;
$pdf->setY(12);
$pdf->setX(10);

$negocio = 'SELECT * from negocio' ;     
$result = mysqli_query($conn,$negocio);
while($mostrar = mysqli_fetch_array($result)){
// Agregamos los datos de la empresa
$pdf->Cell(5,$textypos,"{$mostrar['nombre']}");
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(10);
$pdf->Cell(5,$textypos,"DE:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(10);
$pdf->Cell(5,$textypos,"Nombre : {$mostrar['nombre']}");
$pdf->Ln();
$pdf->Cell(5,$textypos,"Celular :{$mostrar['celular']}");
$pdf->Ln();
$pdf->Cell(5,$textypos,"Email : {$mostrar['email']}");
}


/*
// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(75);
$pdf->Cell(5,$textypos,"PARA:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Nombre del cliente");
$pdf->setY(40);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Direccion del cliente");
$pdf->setY(45);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Telefono del cliente");
$pdf->setY(50);$pdf->setX(75);
$pdf->Cell(5,$textypos,"Email del cliente");
*/

session_start();
$id = $_SESSION["id"];
  $negocio = "SELECT * FROM totalPedido WHERE UsuarioID = '$id'" ;     
$resultados = mysqli_query($conn,$negocio);          
while($negocio= mysqli_fetch_array($resultados)){
// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(30);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Remito (No valido como factura)");
$pdf->SetFont('Arial','',10);    
$pdf->setY(35);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Fecha: {$negocio['fecha']}");
$pdf->setY(40);$pdf->setX(135);
$pdf->Cell(5,$textypos,"Hora : {$negocio['hora']}");
$pdf->setY(45);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");
$pdf->setY(50);$pdf->setX(135);
$pdf->Cell(5,$textypos,"");
}

/// Apartir de aqui empezamos con la tabla de productos
$pdf->setY(60);$pdf->setX(135);
    $pdf->Ln();
/////////////////////////////
//// Array de Cabecera
$header = array("Cod.","Nombre","Cant.","Precio","Total");
 $w = array(20, 95, 20, 25, 25);
    // Header
    for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C');
    $pdf->Ln();
//// Arrar de Productos
session_start();
$id = $_SESSION["id"];
$negocio = "SELECT SUM(`cantidad`), SUM(`precio`) ,`precio` ,`nombreProduc` ,`prodcutoID` FROM `pedidos` WHERE UsuarioID = '$id' GROUP BY `cantidad`,`prodcutoID`; " ;     
$resultados = mysqli_query($conn,$negocio);          
while($negocio= mysqli_fetch_array($resultados)){
$products = array(
  array($negocio['prodcutoID'], $negocio['nombreProduc'],$negocio['SUM(`cantidad`)'],$negocio['precio'],$negocio['SUM(`precio`)']),
 );

    // Column widths
    // Data
    $total = 0;
    foreach($products as $row)
    {
        $pdf->Cell($w[0],6,$row[0],1);
        $pdf->Cell($w[1],6,$row[1],1);
        $pdf->Cell($w[2],6,number_format($row[2]),'1',0,'R');
        $pdf->Cell($w[3],6,"$ ".number_format($row[3],2,".",","),'1',0,'R');
        $pdf->Cell($w[4],6,"$ ".number_format($row[3]*$row[2],2,".",","),'1',0,'R');

        $pdf->Ln();
        $total+=$row[3]*$row[2];
        

    }
}    
/////////////////////////////
  $negocio = "SELECT * FROM totalPedido WHERE UsuarioID = '$id'" ;     
         $resultados = mysqli_query($conn,$negocio);          
            while($negocio= mysqli_fetch_array($resultados)){
//// Apartir de aqui esta la tabla con los subtotales y totales
$pdf->Ln();
$yposdinamic = 60 + (count($products)*10);

$pdf->setY($yposdinamic);
$pdf->setX(235);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

/////////////////////////////
$header = array("", "");
$data2 = array(
	array("Subtotal",$negocio['total']),
	array("Descuento", 0),
	array("Impuesto", 0),
	array("Total", $negocio['total']),
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
        $pdf->Cell($w2[1],6,"$ ".number_format($row[1], 2, ".",","),'1',0,'R');

        $pdf->Ln();
    }
}    
/////////////////////////////

$yposdinamic += (count($data2)*10);
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(5,$textypos,"Powered by Evilnapsis");


$pdf->output();