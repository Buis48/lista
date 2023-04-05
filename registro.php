<?php
require 'enlace.php';
//$ = $_POST[''];
$nombre = $_POST['nombreP'];
$correo = $_POST['correoP'];
$cedula = $_POST['cedulaP'];
$grado = $_POST['gradoP'];
$aor = $_POST['anosrP'];
$insti = $_POST['instP'];
$ciudad = $_POST['ciudadP'];
$edad = $_POST['edadP'];
$genero = $_POST['generoP'];
$fecha = $_POST['fechaP'];
$d1 = 1;
$d2 = 1;
$d3 = 1;
$d4 = 1;

$insCom = "INSERT INTO datos_participantes(`nombre_par`, `correo_par`, `cedula_par`, `grado_par`, `resi_par`, `inst_par`, `ciudad_par`, `edad_par`, `genero_par`, `dia_uno`)VALUES('$nombre','$correo','$cedula','$grado','$aor','$insti','$ciudad','$edad','$genero','$d1')";

$query = mysqli_query($enlace,$insCom);
if($query){
echo 'correcto';
} else {
    echo 'incorrecto';
}

//echo $nombre;echo $correo;echo  $cedula;echo  $grado;echo $aor;echo  $insti;echo  $ciudad;echo $edad;echo  $genero;echo  $fecha;
?>
