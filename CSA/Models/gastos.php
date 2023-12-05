<?php 

require_once 'configs/database.php';

class Gastos{

    private $id;
    private $cantidad;
    private $descripcion;
    private $costo;
    private $user_id;
    private $created_at;
    private $updated_at;
    private $db;

    public function __construct()
    {
        $this->db = DATABASE::connect();
    }

    public function getId(){return $this->id;}
    public function getCantidad(){return $this->cantidad;}
    public function getDescripcion(){return $this->descripcion;}
    public function getCosto(){return $this->costo;}
    public function getUser_id(){return $this->user_id;}
    public function getCreated(){return $this->created_at;}
    public function getUpdated(){return $this->updated_at;}

    public function setId($id){$this->id = $id;}
    public function setCantidad($cantidad){$this->cantidad = $cantidad;}
    public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
    public function setCosto($costo){$this->costo = $costo;}
    public function setUser_id($user_id){$this->user_id = $user_id;}
    public function setCreated($created_at){$this->created_at = $created_at;}
    public function setUpdated($updated_at){$this->updated_at = $updated_at;}

    public function getAll(){
        $query = "SELECT * FROM Gastos";
        $showall = $this->db->query($query);
        return $showall;
    }

    public function getOne(){
        $query = "SELECT * FROM Gastos WHERE id = {$this->getId()}";
        $show_one = $this->db->query($query);
        return $show_one->fetch_object();
    }

    public function save(){
        $query = "INSERT INTO Gastos VALUES(NULL, {$this->getCantidad()}, '{$this->getDescripcion()}', {$this->getCosto()}, {$this->getUser_id()}, NOW(), NOW());";
        $save = $this->db->query($query);
        
        if($save){
            $response = true;
        }else{  
            $response = false;
        }

        return $response;
    }

    public function delete(){
        $query = "DELETE FROM Gastos WHERE id = {$this->getId()}";
        $delete = $this->db->query($query);
    }
}
