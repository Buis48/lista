<?php
require 'enlace.php';
$nombre = $_POST['nombreC'];
$cedula= $_POST['cedulaC']; 
$correo= $_POST['correoC'];
$curp= $_POST['curpC'];
$encrip = hash('sha256',$curp);
$query = "SELECT dia_uno,dia_dos,dia_tres,dia_cuatro FROM datos_participantes WHERE correo_par = '$correo' && cedula_par = '$cedula'";
$resultado = mysqli_query($enlace, $query);
if($resultado -> num_rows> 0){
    $row = $resultado->fetch_array();
    $d1 = $row['dia_uno']; $d2 = $row['dia_dos']; $d3 = $row['dia_tres']; $d4 = $row['dia_cuatro'];
    $token = $d1 + $d2 + $d3 + $d4;
        if($token === 4){
            $fecha = date('Y-m-d'); 
            $queryF = "UPDATE datos_participantes SET fecha_par = '$fecha' , hash_par = '$encrip' WHERE correo_par = '$correo'";
            $agregar = mysqli_query($enlace,$queryF);            
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
$pdf->MultiCell(0,15,utf8_decode($nombre),0,'C',);
$pdf->Ln(4);
$pdf->SetFont('ver','',15);
$pdf->Cell(0,8,utf8_decode('Por su participación en'),0,1,'C');
$pdf->Cell(0,8,utf8_decode('"1° Jornada Académica de Residentes de Medicina Familiar"'),0,1,'C');
$pdf->Cell(0,8,utf8_decode('como:'),0,1,'C');
$pdf->SetFont('palatino','',20);
$pdf->Cell(0,8,utf8_decode('ASISTENTE'),0,1,'C',);
$pdf->SetFont('ver','',15);
$pdf->Cell(0,8,utf8_decode('Efectuado en la Clínica de Medicina Familiar '),0,1,'C');
$pdf->Cell(0,8,utf8_decode('"Marina Nacional." Completando un total de 16 horas.'),0,1,'C');
$pdf->SetFont('verb','',10);
$pdf->SetDrawColor(187,148,91);
$pdf->SetLineWidth(.5);
$pdf->Line(60,230,150,230);
$pdf->SetY(230);
$pdf->Cell(0,10,utf8_decode('DRA. C. GABRIELA CLAVEL BENÍTEZ '),0,1,'C');
$pdf->SetFont('ver','',10);
$pdf->Cell(0,2,utf8_decode('"DIRECTORA DE UNIDAD MÉDICA"'),0,1,'C');
$pdf->SetFont('georgia','',12);
$pdf->SetTextColor(187,148,91);
$pdf->Cell(0,10,utf8_decode('Ciudad de México, 21 de abril del 2O23'),0,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('palatino','',8);
$pdf->Ln(2);
$pdf->SetX(13);
$pdf->Cell(20,8,utf8_decode('HASH UNICO:'),0,0);
$pdf->Cell(0,8,utf8_decode($encrip),0,1);
$pdf->Image('img/pie.jpg',13, 260,185,0);
$pdf->Output('','Constancia de participación','true');   
$cerrar = mysqli_close($enlace);
        }  else {
            echo '<script>window.location.href="solicitud.php";alert ("NO CUMPLE CON LA CANTIDAD DE DIAS NECESARIO");
            </script>';
            $cerrar = mysqli_close($enlace);
        }
} else {
    echo '<script>window.location.href="solicitud.php";alert ("NO SE ENCONTRO REGISTRO ALGUNO");
    </script>';
    $cerrar = mysqli_close($enlace);
}
?>