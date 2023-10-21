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
        <h1 class="center">Nuevo Estudiante</h1>

        <div class="center"><?php echo $this->mensaje; ?></div>

        <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">

            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" id="" required>
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="" required>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" id="" required>
            </p>

            <p>
                <label for="cedula">Cedula</label><br>
                <input type="text" name="cedula" id="" required>
            </p>
            <p>
                <label for="telefono">Telefono</label><br>
                <input type="text" name="telefono" id="" required>
            </p>
            <p>
                <label for="familiar">Nombre de un familiar</label><br>
                <input type="text" name="familiar" id="" required>
            </p>
            
            <p>
                <label for="telFamiliar">Telefono de un familiar</label><br>
                <input type="text" name="telFamiliar" id="" required>
            </p>

            <p>
            <input type="submit" value="Registrar nuevo alumno">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>