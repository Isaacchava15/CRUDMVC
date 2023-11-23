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

        $mensaje1 = "echo <p style='text-align: center;
        color: white;'> Nuevo alumno creado ✔ </p>";

        $mensaje2 = "echo <div> 
                            <p style='text-align: center; color: white;'> Error: La matrícula ya existe <span style='color: red;'> X </span> </p> 
                        </div>";

        if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'telefono' => $telefono, 'familiar' => $familiar, 'telFamiliar' => $telFamiliar])){
            $mensaje = $mensaje1;
            
        }else{
            $mensaje = $mensaje2;
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>