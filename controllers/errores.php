<?php 

class Errores extends Controller{ // Aquí se hereda del archivo controller


    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe el sitio.";
         
        //echo "<p>Error al cargar recurso</p>";
    }

    function render(){
        $this->view->render('errores/index'); //Llama el metodo render cargando la vista de error
    }
}

?>