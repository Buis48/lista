<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de asistencia 1° Jornada Académica de Residentes de Medicina Familiar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
</head>
<body class="font-family" style="background-color: #87CEFA ;">
    <br>
<div class="container-xxl p-3 px-1 text-center">
       <div class="row justify-content-center">  
        <div class="col-lg-11">
            <h6 class="h2">1° Jornada Académica de Residentes de Medicina Familiar.</h6>
            <p class="lead">Formulario de participación.</p>
        </div>
        </div> 
 </div>
 <script>
    function mayus(e) {
    e.value = e.value.toUpperCase();
}
function minus(e) {
    e.value = e.value.toLowerCase();
}
 </script>
 <div class="container-fluid">
    <form id="" action="" method="post">
        <div class="row justify-content-center">
            <div class="col-sm-8">
            <label  class="form-label">Nombre Completo.</label>
            
            <input type="text" class="form-control" id="" name="nombreP" onkeyup="mayus(this);">
            <!--<div class="form-text"></div> comprobar despues su uso -->
            </div>
            </div>
        </div>
       
        <div class="row p-2 justify-content-center">
            <div class=" col-sm-4">
                <label  class="form-label">Correo electronico.</label>
                <input type="text" class="form-control" id="" name="correoP" onkeyup="minus(this);">
            </div>
            
                <div class="col-sm-4">    
                <label  class="form-label">Repite tu correo electronico.</label>
                <input type="text" class="form-control" id="" name="correoP" onkeyup="minus(this);">
                </div>
        </div> 

        <div class="row p-2 justify-content-center">
            <div class="col-sm-2">
                <label  class="form-label">Cedula profesional.</label>
                <input type="text" class="form-control" id="" name="cedulaP">
            </div>
            <div class="col-sm-2">    
                <label  class="form-label">Grado académico.</label>
                <select class="form-select" name="gradoP">
                <option selected>Selecciona</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Medicina General">Medicina General</option>
                <option value="Medicina Especialista">Medicina Especialista</option>
                </select>
            </div>
            <div class="col-sm-2">    
            <label  class="form-label">Año de residencia.</label>
            <input type="text" class="form-control" id="" name="anosrP" placeholder="Si es el caso, con número.">
            </div>
            <div class="col-sm-2">    
                <label  class="form-label">Institución.</label>
                <select class="form-select" name="instP">
                <option selected>SELECCIONE</option>
                <option value="ISSSTE">ISSSTE</option>
                <option value="IMSS">IMSS</option>
                <option value="UNAM">UNAM</option>
                <option value="IPN">IPN</option>
                <option value="OTRO">OTRO</option>
                </select>
            </div>    
        </div>
        <div class="row p-2 justify-content-center">
            <div class="col-sm-3">
                <label class="form-label">Ciudad de residencia.</label>
                <input type="text" class="form-control" id="" name="ciudadP" onkeyup="mayus(this);">
            </div>
            <div class="col-sm-3">
                <label class="form-label">Edad.</label>
                <input type="text" class="form-control" id="" name="edadP">
            </div>
            <div class="col-sm-2">
                 <label class="form-label">Genero.</label>
                <select class="form-select" name="generoP" id="">
                <option slected>SELECCIONE</option>   
                <option value="MASCULINIO">MASCULINO</option>
                <option value="FEMENINO">FEMENINO</option>
                <option value="PREFIERO NO CONTESTAR">PREFIERO NO CONTESTAR</option>
                </select>
            </div>
        </div> 
        <div class="row p-2 justify-content-center">
        <div class="col-sm-1 gy-2">
        <input type="reset" value="Limpiar" class="form-control input-md btn btn-success" id="">
        </div>
        <div class="col-sm-4 gy-2">
        <input type="submit" name="" value="Enviar" class="form-control input-md btn btn-dark" id="">
        </div>
        </div>
    </form>
</div>




</body>
<script src="js/jquery-3.6.4.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>