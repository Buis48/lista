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
$tok1 = 1;

$validar = "SELECT * FROM datos_participantes WHERE correo_par = '$correo' && cedula_par = '$cedula'";
$validando = mysqli_query($enlace,$validar);

if ($validando -> num_rows > 0){
        if($fecha=='2023-04-21'){
        $modif4 = "UPDATE datos_participantes SET dia_cuatro = '$tok1' WHERE correo_par = '$correo' ";
        $mod4 = mysqli_query($enlace,$modif4);
        echo '<script>window.location.href="index.php";alert ("REGISTRO DEL CUARTO DIA COMPLETADO.");
        </script>';
        $cerrar = mysqli_close($enlace);
    } else if ($fecha=='2023-04-11'){
        $modif3 = "UPDATE datos_participantes SET dia_tres = '$tok1' WHERE correo_par = '$correo' ";
        $mod3 = mysqli_query($enlace,$modif3);
        echo '<script>window.location.href="index.php";alert ("REGISTRO DEL TERCER DIA COMPLETADO.");
        </script>';
        $cerrar = mysqli_close($enlace);
    }else if ($fecha=='2023-04-18'){
        $modif2 = "UPDATE datos_participantes SET dia_dos = '$tok1' WHERE correo_par = '$correo' ";
        $mod2 = mysqli_query($enlace,$modif2);
        echo '<script>window.location.href="index.php";alert ("REGISTRO DEL SEGUNDO DIA COMPLETADO.");
        </script>';
        $cerrar = mysqli_close($enlace);
    }else {
        echo '<script>window.location.href="index.php";alert ("REGISTRO YA REALIZADO O FUERA DE TIEMPO.");
        </script>';
        $cerrar = mysqli_close($enlace);
    }
} else{
    $insertar = "INSERT INTO datos_participantes(`nombre_par`, `correo_par`, `cedula_par`, `grado_par`, `resi_par`, `inst_par`, `ciudad_par`, `edad_par`, `genero_par`, `dia_uno`)
    VALUES('$nombre','$correo','$cedula','$grado','$aor','$insti','$ciudad','$edad','$genero','$tok1')";
    $query = mysqli_query($enlace,$insertar);
    echo '<script>window.location.href="index.php";alert ("REGISTRO COMPLETADO CON EXITO");
    </script>';
    $cerrar = mysqli_close($enlace);
    } 

?>
