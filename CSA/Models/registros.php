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
        $query = "SELECT * FROM registros";
        $save = $this->db->query($query);
        return $save;
    }


}

?>