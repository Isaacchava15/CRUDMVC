<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-color: #212529;">
    <?php require 'views/header.php'; ?>

    <div id="main" style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">
        <h1 style="text-align: center;
    color: #fbfaff;">Proyecto Final de Programación Avanzada</h1>
        <h2 style="text-align: center;
    color: #fbfaff;">Edward Arce</h2>
        <br><br><br>
        <div class="d-grid gap-2">
            <a href="nuevo" class="btn  btn-lg" style="color: #141a35; background-color: #e09f3e;">Nueva Matrícula</a>
            <a href="consulta" class="btn btn-lg" style="color: #141a35; background-color: #fff3b0;">Consultar Matrículas</a>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
</body>

</html>