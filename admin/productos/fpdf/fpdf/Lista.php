<?php
require "../../../../database.php";
require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
       require "../../../../database.php";
         $sql = "SELECT * FROM negocio JOIN localidad JOIN negocio_misitio";
            $result3 = mysqli_query($conn,$sql);
            while($mostrar_productosp1 = mysqli_fetch_array($result3))
           {
            $id =  $mostrar_productosp1['id'];
            $nombre = $mostrar_productosp1['nombre'];
            $celular = $mostrar_productosp1['celular'];
            $email = $mostrar_productosp1['email'];
            $ciudad = $mostrar_productosp1['localidad'];
            $imagen = $mostrar_productosp1['imagen_sitio'];   
       $this->Image("../../../../images/$imagen", 0,0, 40); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode("$nombre"), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Ubicación :$ciudad"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Teléfono : $celular"), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : $email"), 0, 0, '', 0);
      $this->Ln(10);
      
      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(50, 5, 5);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("Lista de productos"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(50, 5, 5); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(50, 5, 5); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(50, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
      $this->Cell(50, 10, utf8_decode('PRECIO'), 1, 0, 'C', 1);
      $this->Ln();
           } 
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

//include '../../recursos/Recurso_conexion_bd.php';
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
//$consulta_info = $conexion->query(" select *from hotel ");
//$dato_info = $consulta_info->fetch_object();
$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

/*$consulta_reporte_alquiler = $conexion->query("  ");*/

/*while ($datos_reporte = $consulta_reporte_alquiler->fetch_object()) {      
   }*/
$i = $i + 1;
/* TABLA */

   $sql = "SELECT * FROM productos";
            $result3 = mysqli_query($conn,$sql);
            while($mostrar_productosp1 = mysqli_fetch_array($result3))
           {
            $id =  $mostrar_productosp1['id'];
            $nombre = $mostrar_productosp1['nombre'];
            $precio=$mostrar_productosp1['precio'];
            $cantidad= $mostrar_productosp1['cantidad'];
            $categoria= $mostrar_productosp1['categoria'];
            $pdf->Cell(50, 10, utf8_decode("$id"), 1, 0, 'C', 0);
            $pdf->Cell(70, 10, utf8_decode("$nombre"), 1, 0, 'C', 0);
            $pdf->Cell(50, 10, utf8_decode("$$precio"), 1, 0, 'C', 0);
            $pdf->Ln();
            }
            
         $sql = "SELECT * FROM negocio_misitio";
            $result3 = mysqli_query($conn,$sql);
            while($mostrar_productosp1 = mysqli_fetch_array($result3))
           {
            $pdf->Ln(20);
            $dominio = $mostrar_productosp1['dominio'];
            $pdf->Cell(46,0,utf8_decode("Los precios y detalles de los productos están públicados en la tienda online "),10,20,30,false,"$dominio");
            $pdf->Ln(5);
            $pdf->Cell(56,0,utf8_decode("$dominio "),40,50,60,false,"$dominio");
    
          }
$pdf->Output('Lista', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)