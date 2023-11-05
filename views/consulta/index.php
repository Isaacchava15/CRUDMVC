<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto de Programación</title>
    <!-- Decidí usar Boostrap para apoyarme con la estructura HTML y el CSS?> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color: #212529;">
    <?php require 'views/header.php'; ?>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: #212529; color:white; border-radius: 5px;">Lista de Estudiantes
        </h1>
    </div>
    <br>
    
    <div class="container">
        <table class="table table-dark table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Matricula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Nombre de Familiar</th>
                    <th scope="col">Telefono de Familiar</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
                <?php
                include_once 'models/alumno.php';
                foreach ($this->alumnos as $row) { //Lo que hace este foreach es traer los datos de la clase Alumno e imprimirlos.
                    $alumno = new Alumno(); //Nueva variable de tipo alumno
                    $alumno = $row;
                    ?>
                    <tr id="fila-<?php echo $alumno->matricula; ?>">
                        <td>
                            <?php echo $alumno->matricula; ?>
                        </td>
                        <td>
                            <?php echo $alumno->nombre; ?>
                        </td>
                        <td>
                            <?php echo $alumno->apellido; ?>
                        </td>
                        <td>
                            <?php echo $alumno->cedula; ?>
                        </td>
                        <td>
                            <?php echo $alumno->telefono; ?>
                        </td>
                        <td>
                            <?php echo $alumno->familiar; ?>
                        </td>
                        <td>
                            <?php echo $alumno->telFamiliar; ?>
                        </td>

                        <th>
                            <a class="btn btn-outline-warning"
                                href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Editar</a>
                            <button class="bEliminar btn btn-outline-danger"
                                data-matricula="<?php echo $alumno->matricula; ?>">Eliminar</button>
                        </th>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

        <p>
            <a href="http://localhost/cursoMVC/" class="btn btn-secondary btn-lg">Regresar</a>
        </p>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL') ?>public/js/main.js"></script>

</body>

</html>