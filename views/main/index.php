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

    <div id="main" style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">
        <h1 class="center">Proyecto Final de Programación</h1>
        <h2 class="center">Edward Arce</h2>
        <br><br><br>
        <div class="d-grid gap-2">
            <a href="nuevo" class="btn btn-primary btn-lg" style="color: #141a35; background-color: #b0d5ff;">Nueva Matrícula</a>
            <a href="consulta" class="btn btn-secondary btn-lg" style="color: #141a35; background-color: #e2e2e2;">Consultar Matrículas</a>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
</body>

</html>