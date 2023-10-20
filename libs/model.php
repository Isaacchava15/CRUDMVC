<?php
//El modelo contiene toda la lógica de cómo moldeamos o trabajamos los datos
class Model{

    function __construct(){
        $this->db = new Database();
    }
}

?>