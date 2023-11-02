<?php

include_once 'models/alumno.php';

class ConsultaModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT*FROM alumnos");

            while ($row = $query->fetch()) {
                $item = new Alumno(); //Muevo elemento de tipo Alumno en la variable $item
                $item->matricula = $row['Matricula']; //Se asigna las variables de la clase alumno junto con las filas de la bd
                $item->nombre = $row['Nombre'];
                $item->apellido = $row['Apellido'];
                $item->cedula = $row['cedula'];
                $item->telefono = $row['telefono'];
                $item->familiar = $row['familiar'];
                $item->telFamiliar = $row['telFamiliar'];

                //array_push permite ingresar un nuevo valor a un arreglo
                array_push($items, $item); //Esta metiendo los datos de item al arreglo vacio llamado items.
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }

    }

    public function getById($id) //Es igual a la funcion get, lo que cambia es la consulta que se busca por id (matricula)
    {
        $item = new Alumno();

        $query = $this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");

        try {
            $query->execute(['matricula' => $id]);

            while ($row = $query->fetch()) {
                $item->matricula = $row['Matricula'];
                $item->nombre = $row['Nombre'];
                $item->apellido = $row['Apellido'];
                $item->cedula = $row['cedula'];
                $item->telefono = $row['telefono'];
                $item->familiar = $row['familiar'];
                $item->telFamiliar = $row['telFamiliar'];
            }

            return $item;

        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item)
    {

        $query = $this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre, apellido = :apellido, cedula = :cedula, telefono = :telefono, familiar = :familiar, telFamiliar = :telFamiliar WHERE matricula = :matricula");
        try {
            $query->execute([
                "matricula" => $item["matricula"],
                "nombre" => $item["nombre"],
                "apellido" => $item["apellido"],
                "cedula" => $item['Cedula'],
                "telefono" => $item['Telefono'],
                "familiar" => $item['Familiar'],
                "telFamiliar" => $item['telFamiliar'],
            ]);
            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id) {
        $query = $this->db->connect()->prepare("DELETE FROM alumnos WHERE matricula = :id");
        try {
            $query->execute([
                "id" => $id,
            ]);
            return true;

        } catch (PDOException $e) {
            return false;
        }
    }
}

?>