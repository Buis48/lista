<?php
require 'fpdf/fpdf.php';


class PDF extends FPDF{
    function Header()
{
    $this->Image('img/en.jpg', 17, 13,185,0);
    $this->Ln(55);
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf-> AddFont('palatino','','palabi.php');
$pdf-> AddFont('ver','','VerdanaRef.php');
$pdf-> AddFont('verb','','VerdanaBold.php');
$pdf-> AddFont('georgia','','georgiab.php');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('georgia','',22);
$pdf->SetTextColor(112,114,114);
$pdf->Cell(0,10,utf8_decode('EL I.S.S.S.T.E.'),0,1,'C');
$pdf->SetFont('georgia','',17);
$pdf->Cell(0,10,utf8_decode('OTORGA EL PRESENTE'),0,2,'C');
$pdf->Ln(6);
$pdf->SetFont('georgia','',47);
$pdf->SetTextColor(187,148,91);
$pdf->Cell(0,10,utf8_decode('RECONOCIMIENTO'),0,1,'C');
$pdf->SetFont('georgia','',17);
$pdf->Ln(4);
$pdf->SetTextColor(112,114,114);
$pdf->Cell(0,10,utf8_decode('A'),0,2,'C');
$pdf->SetFont('palatino','',37);
$pdf->MultiCell(0,10,utf8_decode('Dr/a.Brhadaranyakopanishadvivekachudamani Erreh Muñoz..'),0,'C',);
$pdf->Ln(4);
$pdf->SetFont('georgia','',17);
$pdf->SetTextColor(112,114,114);
$pdf->Cell(0,10,utf8_decode('Por su participación en'),0,2,'C');
$pdf->Cell(0,10,utf8_decode('"1° Jornada Académica de Residentes de Medicina Familiar"'),0,2,'C');
$pdf->Image('img/pie.jpg',17, 260,185,0);
$pdf->Output();


//$pdf->SetFont('palatino','',12);
//$pdf->SetTextColor(255,51,144);
//112..114.114 COLOR GRIS 
//$pdf->Cell(0,10,utf8_decode('Imprimiendo línea número '),0,1,'C');
?>

