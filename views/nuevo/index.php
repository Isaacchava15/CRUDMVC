<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #252422;">
    <?php require 'views/header.php'; ?>
    <br>
    <h1 class="background-color: #252422 p-2 text-white text-center">Nuevo Estudiante</h1>
    <br>
    <div class="container">

        <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">


            <div class="row">
                <div class="col">
                <label for="formGroupExampleInput" class="form-label" style="color:white">Nombre</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="ej. Edward" name="nombre">
                </div>
                <div class="col">
                <label for="formGroupExampleInput" class="form-label" style="color:white">Apellidos</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="ej. Arce Jimenez" name="apellido">
                </div>
            </div>

            <br>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="color:white">Código de matrícula</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="ej. A2215448" name="matricula">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Cédula</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="ej. 117460066" name="cedula">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Teléfono</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="ej. 87451236" name="telefono">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Nombre de un familiar</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="ej. María Jimenez Acosta" name="familiar">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Teléfono de familiar</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    placeholder="ej. 87451236" name="telFamiliar"> 
            </div>



            <p>
                <input type="submit" class="btn btn-success btn-lg" style="color: #fbfaff;" value="Registrar">
                <a href="main" class="btn btn-secondary btn-lg">Regresar</a>
            </p>

        </form>
    </div>
    <?php require 'views/footer.php'; ?>


</body>

</html>