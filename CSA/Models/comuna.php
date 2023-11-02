<?php 

require_once 'configs/database.php';

class Comuna{

    private $id;
    private $nombreComuna;
    private $db;

    public function __construct()
    {
        $this->db = DATABASE::connect();
    }

    public function getAll(){
        $query = "SELECT * FROM comunas";
        $save = $this->db->query($query);
        return $save;
    }


}

?>