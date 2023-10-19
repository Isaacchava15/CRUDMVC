<?php

class Controller{

    function __construct(){
        echo "<p>Controlador bass</p>";
        $this->view = new View(); 
    }
}

?>