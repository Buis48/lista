<?php
require 'enlace.php';
hash('sha256','MAHL960902HDFRRS00');








//Creacion de pdf
require 'fpdf/fpdf.php';
class PDF extends FPDF{
    function Header()
{
    $this->Image('img/en.jpg', 13, 10,185,0);
    $this->Ln(50);
}
}
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
$pdf->SetFont('georgia','',45);
$pdf->SetTextColor(187,148,91);
$pdf->Cell(0,10,utf8_decode('RECONOCIMIENTO'),0,1,'C');
$pdf->SetFont('georgia','',17);
$pdf->Ln(4);
$pdf->SetTextColor(112,114,114);
$pdf->Cell(0,10,utf8_decode('A'),0,2,'C');
$pdf->SetFont('palatino','',35);
$pdf->MultiCell(0,15,utf8_decode('Dr/a.Brhadaranyakopanishadvivekachudamani Erreh Muñoz..'),0,'C',);//cambiar por variable de nombre de bd
$pdf->Ln(4);
$pdf->SetFont('ver','',15);
$pdf->Cell(0,8,utf8_decode('Por su participación en'),0,1,'C');
$pdf->Cell(0,8,utf8_decode('"1° Jornada Académica de Residentes de Medicina Familiar"'),0,1,'C');
$pdf->Cell(0,8,utf8_decode('como:'),0,1,'C');
$pdf->SetFont('palatino','',20);
$pdf->Cell(0,8,utf8_decode('ASISTENTE'),0,1,'C',);
$pdf->SetFont('ver','',15);
$pdf->Cell(0,8,utf8_decode('Efectuado en la Clínica de Medicina Familiar '),0,1,'C');
$pdf->Cell(0,8,utf8_decode('Marina Nacional. 12 hora.'),0,1,'C');
$pdf->SetFont('verb','',10);
$pdf->SetDrawColor(187,148,91);
$pdf->SetLineWidth(.5);
$pdf->Line(60,230,150,230);
$pdf->SetY(230);
$pdf->Cell(0,10,utf8_decode('DRA. C. GABRIELA CLAVEL BENÍTEZ '),0,1,'C');
$pdf->SetFont('ver','',10);
$pdf->Cell(0,2,utf8_decode('DIRECTORA DE UNIDAD MÉDICA'),0,1,'C');
$pdf->SetFont('georgia','',12);
$pdf->SetTextColor(187,148,91);
$pdf->Cell(0,10,utf8_decode('Ciudad de México, 21 de abril del 2O23'),0,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('palatino','',8);
$pdf->Ln(2);
$pdf->SetX(13);
$pdf->Cell(0,8,utf8_decode('HASH:2c8d7860bcfc43451f714954c7e2ef6291a3e484c4eada3e47d9bd5756cef2c3'),0,1);//cambiar por variable de hash
$pdf->Image('img/pie.jpg',13, 260,185,0);
$pdf->Output('','Constancia de participación','true');
?>

