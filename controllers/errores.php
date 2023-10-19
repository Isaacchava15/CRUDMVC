<?php 

class Errores extends Controller{ // Aquí se hereda del archivo controller


    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe el sitio.";
        $this->view->render('errores/index'); //Llama el metodo render cargando la vista de error
        //echo "<p>Error al cargar recurso</p>";
    }
}

?>