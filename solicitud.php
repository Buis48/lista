<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constancia 1° Jornada Académica de Residentes de Medicina Familiar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <script>
    function mayus(e) {
        e.value = e.value.toUpperCase();
    }
    function minus(e) {
        e.value = e.value.toLowerCase();
    }
    </script>
    <!--style="background-color: #87CEFA ;"-->
    <div class="container-fluid col-sm-9 py-sm-4 py-xs-1">
        <div class="row justify-content-center ">
            <div class="card">
                <div class="card-header text-center">
                    <h6 class="h2">Ficha para generar constancia de participación.</h6>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Rellena con tus datos, si cumples con los criterios de asistencia, se te
                        generara automáticamente la constancia.</h6>
                    <form id="" action="generar.php" method="post">
                        <div class="row p-2 justify-content-center">
                            <div class="col-sm-4">
                                <label class="form-label">Nombre completo.</label>
                                <input type="text" class="form-control" id="" name="nombreC" onkeyup="mayus(this);">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label">Cedula Profesional.</label>
                                <input type="text" class="form-control" id="" name="cedulaC">
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label">Correo electronico.</label>
                                <input type="text" class="form-control" id="" name="correoC">
                            </div>
                        </div>
                        
                        <div class="row p-2 justify-content-left">
                        <div class="col-sm-9">
                                <label class="form-label">CURP</label>
                                <input type="text" class="form-control" id="" name="curpC" onkeyup="mayus(this);">
                            </div>
                        </div>
                        <div class="row p-2 justrify-content-center">
                            <div class="col-sm-6 gy-2">
                                <input type="button" name="" id="" value="Generar Constancia"
                                    class="form-control btn btn-success">
                            </div>
                        </div>
                    </form>
                    <p calss="cart-text">
                    <figcaption class="blockquote-footer">
                        Se abrirá una pestañas emergente, donde podrás descargar o imprimir la misma.
                    </figcaption>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="js/jquery-3.6.4.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>