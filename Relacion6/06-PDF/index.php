<?php
require_once "fpdf184/fpdf.php";

class PDF extends FPDF
{
    // Cargar los datos
    function LoadData($file): array {
        // Leer las líneas del fichero
        $lines = file($file);
        $data = array();
        foreach ($lines as $line)
            $data[] = explode(';', trim($line));
        return $data;
    }

    function FancyTable($header, $data) {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(200,143,156);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('Arial','B');
        // Cabecera
        $w = array(50, 30, 30, 30, 30);
        for($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Datos
        $fill = false;
        foreach($data as $row) {
            $this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
            $this->Cell($w[1],6,$row[1],'LR',0,'C',$fill);
            $this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
            $this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
            $this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
            $this->Ln();
            $fill = !$fill;
        }
        // Línea de cierre
        $this->Cell(array_sum($w),0,'','T');
    }
}


$pdf = new PDF();
$datos = $pdf->LoadData("datos.txt");

$pdf->AddPage();
$pdf->SetTitle('FPDF');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Galeria de imagenes');

$pdf->Ln();

$pdf->Image('./imagenes/elefante.jpg',10, 30, 50, 50, '', './imagenes/elefante.jpg');
$pdf->Image('./imagenes/pez.png',80, 30, 50, 50, '', './imagenes/pez.png');
$pdf->Image('./imagenes/casas.jpg',150, 30, 50, 50, '', './imagenes/casas.jpg');
$pdf->Image('./imagenes/paisaje.jpg',10, 95, 50, 50, '', './imagenes/paisaje.jpg');
$pdf->Image('./imagenes/sandia.png',80, 95, 50, 50, '', './imagenes/sandia.png');
$pdf->Image('./imagenes/pizza.jpg',150, 95, 50, 50, '', './imagenes/pizza.jpg');

$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();

$pdf->Cell(40,10,'Elige tu plan de compra');
$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','',16);
$pdf->FancyTable($datos[0], array_slice($datos, 1, count($datos)));
$pdf->Output();