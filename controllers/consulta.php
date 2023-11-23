<?php

class Consulta extends Controller
{ // Aquí se hereda del archivo controller

    function __construct()
    {
        parent::__construct(); //Se llama al constructor heredado.
        $this->view->alumnos = [];
    }

    function render()
    {
        //Estas dos lineas siguientes lo que hacen es traer la lista de alumnos
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;

        $this->view->render('consulta/index'); //Llama el metodo render cargando la vista de consulta

    }

    function verAlumno($param = null)
    { //Aqui se va obtener la matricula para poder buscar a un alumno en especifico.
        $idAlumno = $param[0];
        $alumno = $this->model->getbyId($idAlumno);

        session_start();
        $_SESSION['id_verAlumno'] = $alumno->matricula; //Esto le da algo de seguridad al parametro matricula, haciendo que no se pueda modificar ni siquiera desde inspect

        $this->view->alumno = $alumno;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }

    function actualizarAlumno()
    {
        session_start();
        $matricula = $_SESSION['id_verAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $familiar = $_POST['familiar'];
        $telFamiliar = $_POST['telFamiliar'];

        unset($_SESSION['id_verAlumno']);

        if ($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'telefono' => $telefono, 'familiar' => $familiar, 'telFamiliar' => $telFamiliar])) {
            // actualizar alumno exito
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;
            $alumno->cedula = $cedula;
            $alumno->telefono = $telefono;
            $alumno->familiar = $familiar;
            $alumno->telFamiliar = $telFamiliar;

            $this->view->alumno = $alumno;

            $mensaje3 = "echo <p style='text-align: center;
            color: white;'> Alumno actualizado correctamente ✔ </p>";

            $this->view->mensaje = $mensaje3;
        } else {
            // mensaje de error
            $this->view->mensaje = "No se pudo actualizar el alumno X";
        }
        $this->view->render('consulta/detalle');

    }

    function eliminarAlumno($param = null){
        $matricula = $param[0];

        if ($this->model->delete($matricula)) {
            // Eliminar alumno exito
                      
            $mensaje = "Alumno eliminado correctamente ✔";
        } else {
            // mensaje de error

            $mensaje = "No se pudo eliminar el alumno X";
        }
        //$this->render();

        echo "Se elimino " . $matricula;

    }
}

?>