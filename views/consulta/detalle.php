<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #212529;">

    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: #212529; color:white; border-radius: 5px;">Información del
            alumno
            <?php echo $this->alumno->matricula; ?>
        </h1>
    </div>
    <br>

    <div class="container">

        <div class="center">
            <p class="fs-4">
                <?php echo $this->mensaje; ?> 
            </p>
        </div>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno" method="POST">



            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label" style="color:white">Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                        value="<?php echo $this->alumno->nombre; ?>" required name="nombre">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label" style="color:white">Apellidos</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                        value="<?php echo $this->alumno->apellido; ?>" required name="apellido">
                </div>
            </div>

            <br>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="color:white">Código de matrícula</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    value="<?php echo $this->alumno->matricula; //Matricula tiene "disable" porque no se puede actualizar?>"
                    name="matricula" disabled>
            </div>


            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Cédula</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    value="<?php echo $this->alumno->cedula; ?>" required name="cedula">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Teléfono</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    value="<?php echo $this->alumno->telefono; ?>" required name="telefono">
            </div>


            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Nombre de un familiar</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    value="<?php echo $this->alumno->familiar; ?>" required name="familiar">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" style="color:white">Teléfono de familiar</label>
                <input type="text" class="form-control" id="formGroupExampleInput2"
                    value="<?php echo $this->alumno->telFamiliar; ?>" required name="telFamiliar">
            </div>

            <p>
        
            <button type="submit" class="btn btn-success btn-lg" >Actualizar alumno</button>
            <a href="http://localhost/cursoMVC/consulta" class="btn btn-secondary btn-lg">Regresar</a>
            </p>


        </form>

    </div>

    <?php require 'views/footer.php'; ?>
</body>

</html>