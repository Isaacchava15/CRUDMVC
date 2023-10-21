<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO ALUMNOS (MATRICULA, NOMBRE, APELLIDO, CEDULA, TELEFONO, FAMILIAR, TELFAMILIAR) 
            VALUES(:matricula, :nombre, :apellido, :cedula, :telefono, :familiar, :telFamiliar)');
            
            
            $query->execute(['matricula' => $datos['matricula'], 'nombre' => $datos['nombre'], 'apellido' => $datos['apellido'], 'cedula' => $datos['cedula'], 
            'telefono' => $datos['telefono'], 'familiar' => $datos['familiar'], 'telFamiliar' => $datos['telFamiliar']]);

            return true;
        }catch(PDOException $e){
            //echo $e->getMessage();
            echo "Ya existe esa matrícula";
            return false;
        }
        
    }
}

?>