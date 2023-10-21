<?php

include_once 'models/alumno.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT*FROM alumnos");

            while($row = $query->fetch()){
                $item = new Alumno(); //Muevo elemento de tipo Alumno en la variable $item
                $item->matricula = $row['Matricula']; //Se asigna las variables de la clase alumno junto con las filas de la bd
                $item->nombre = $row['Nombre'];
                $item->apellido = $row['Apellido'];

                //array_push permite ingresar un nuevo valor a un arreglo
                array_push($items, $item); //Esta metiendo los datos de item al arreglo vacio llamado items.
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
        
    }
}

?>