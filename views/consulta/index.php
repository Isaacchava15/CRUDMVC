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
        <h1 class="center">Seccion de consulta</h1>
        <table width=100%>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include_once'models/alumno.php';
                foreach($this->alumnos as $row){ //Lo que hace este foreach es traer los datos de la clase Alumno e imprimirlos.
                    $alumno = new Alumno(); //Nueva variable de tipo alumno
                    $alumno = $row;
             ?> 
                <tr>
                    <td><?php echo $alumno->matricula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><a href="#">Editar</a></td>
                    <td><a href="#">Eliminar</a></td>
                </tr>

                <?php }  ?>
            </tbody>
        </table>

        
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>