<?php

 class Nuevo extends Controller{ // Aquí se hereda del archivo controller

    function __construct(){
        parent::__construct(); //Se llama al constructor heredado.
        $this->view->render('nuevo/index'); //Llama el metodo render cargando la vista de main
        //echo "<p>Nuevo controlador Main</p>";
    }

    function registrarAlumno(){
        echo 'Alumno creado';
        $this->model->insert();
    }


   
 }

?>