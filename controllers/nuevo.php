<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarAlumno(){
        $matricula = $_POST['matricula'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        $cedula  = $_POST['cedula'];
        $telefono  = $_POST['telefono'];
        $familiar = $_POST['familiar'];
        $telFamiliar = $_POST['telFamiliar'];
        

        $mensaje = "";

        if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'telefono' => $telefono, 'familiar' => $familiar, 'telFamiliar' => $telFamiliar])){
            $mensaje = "Nuevo alumno creado ✔";
            
        }else{
            $mensaje = "ERROR: La matrícula ya existe X";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>