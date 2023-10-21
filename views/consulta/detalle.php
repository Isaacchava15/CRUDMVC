<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Detalle de alumno <?php echo $this->alumno->matricula; ?></h1>

        <div class="center"><?php echo $this->mensaje; ?></div>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno" method="POST">

            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" disabled value="<?php echo $this->alumno->matricula;  //Matricula tiene "disable" porque no se puede actualizar?>" required>
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->alumno->nombre;  ?>" required>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" value="<?php echo $this->alumno->apellido;  ?>" required>
            </p>
            <p>
                <label for="cedula">Cedula</label><br>
                <input type="text" name="cedula" value="<?php echo $this->alumno->cedula;  ?>" required>
            </p>
            <p>
                <label for="telefono">Telefono</label><br>
                <input type="text" name="telefono" value="<?php echo $this->alumno->telefono;  ?>" required>
            </p>
            <p>
                <label for="familiar">Nombre de un Familiar</label><br>
                <input type="text" name="familiar" value="<?php echo $this->alumno->familiar;  ?>" required>
            </p>
            <p>
                <label for="telFamiliar">Telefono de un Familiar</label><br>
                <input type="text" name="telFamiliar" value="<?php echo $this->alumno->telFamiliar;  ?>" required>
            </p>

            <p>
            <input type="submit" value="Actualizar alumno">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>