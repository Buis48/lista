<?php
require 'conexion.php';
$nombre = $_POST['texto1'];
$correo = $_POST['correo'];

$insertar = "INSERT INTO prueba_uno VALUES(null,'$nombre','$correo')";
$query = mysqli_query($enlace,$insertar);

if($query){
echo 'correcto';
} else {
    echo 'incorrecto';
}
?>