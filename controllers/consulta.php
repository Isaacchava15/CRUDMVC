<?php

 class Consulta extends Controller{ // Aquí se hereda del archivo controller

    function __construct(){
        parent::__construct(); //Se llama al constructor heredado.
        $this->view->alumnos = [];
    }

    function render(){
        //Estas dos lineas siguientes lo que hacen es traer la lista de alumnos
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos; 

        $this->view->render('consulta/index'); //Llama el metodo render cargando la vista de consulta

    }
 }

?>