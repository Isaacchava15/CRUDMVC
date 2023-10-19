<?php 

class Errores extends Controller{ // Aquí se hereda del archivo controller


    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error genérico";
        $this->view->render('error/index'); //Llama el metodo render cargando la vista de error
        //echo "<p>Error al cargar recurso</p>";
    }
}

?>