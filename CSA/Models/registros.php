<?php 

require_once 'configs/database.php';

class Registros{

    private $id;
    private $descripcion;
    private $fecha;
    private $db;

    public function __construct()
    {
        $this->db = DATABASE::connect();
    }

    public function getAll(){
        $query = "SELECT r.*, v.nombres_volun as voluntario FROM registros r INNER JOIN voluntarios v ON r.id_voluntario = v.id";
        $save = $this->db->query($query);
        return $save;
    }


}

?>