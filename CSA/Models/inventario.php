<?php 

require_once 'configs/database.php';


class Inventario{

    private $id;
    private $tipo_objeto;
    private $nombreObjeto;
    private $cantidad;
    private $color;
    private $observacion;
    private $fecha_registro;
    private $hora_registro;
    private $registrador;
    private $db;

    public function __construct()
    {
        $this->db = DATABASE::connect();        
    }

    public function getId(){return $this->id;}
    public function getTipo(){return $this->tipo_objeto;}
    public function getNombre(){return $this->nombreObjeto;}
    public function getCantidad(){return $this->cantidad;}
    public function getColor(){return $this->color;}
    public function getObservaciones(){return $this->observacion;}
    public function getFecha(){return $this->fecha_registro;}
    public function getHora(){return $this->hora_registro;}
    public function getRegistrador(){return $this->registrador;}

    public function setId($id){$this->id = $id;}
    public function setTipo($tipo_objeto){$this->tipo_objeto = $tipo_objeto;}
    public function setNombre($nombreObjeto){$this->nombreObjeto = $nombreObjeto;}
    public function setCantidad($cantidad){$this->cantidad = $cantidad;}
    public function setColor($color){$this->color = $color;}
    public function setObservacion($observacion){$this->observacion = $observacion;}
    public function setFecha($fecha_registro){$this->fecha_registro = $fecha_registro;}
    public function setHora($hora_registro){$this->hora_registro = $hora_registro;}
    public function setRegistrador($registrador){$this->registrador = $registrador;}


    public function save(){
        $query = "INSERT INTO Inventario VALUES(NULL, '{$this->getTipo()}', '{$this->getNombre()}', {$this->getCantidad()}, '{$this->getColor()}','{$this->getObservaciones()}', CURDATE(), CURTIME(), '{$this->getRegistrador()}' )";
        $save = $this->db->query($query);

        if($save){
            $result = true;
        }else{
            $result = false;
        }

        return $result;
    }

    public function getAll(){
        $query = "SELECT * FROM Inventario;";
        $inventario = $this->db->query($query);
        return $inventario;
    }


    public function getEM(){
        $query = "SELECT * FROM Inventario WHERE tipo_objeto = 'Ropa de Montaña';";
        $montana = $this->db->query($query);
        return $montana;
    }

    public function getFerreteria(){
        $query = "SELECT * FROM Inventario WHERE tipo_objeto = 'Ferreteria';";
        $ferreteria = $this->db->query($query);
        return $ferreteria;
    }

    public function getInvental(){
        $query = "SELECT * FROM Inventario WHERE tipo_objeto = 'Equipo Invernal';";
        $invernal = $this->db->query($query);
        return $invernal;
    }

    public function getI(){
        $query = "SELECT * FROM Inventario WHERE tipo_objeto = 'Inmovilizadores';";
        $inmovilizador = $this->db->query($query);
        return $inmovilizador;
    }

    
    public function getA(){
        $query = "SELECT * FROM Inventario WHERE tipo_objeto = 'Equipo Avalancha';";
        $avalancha = $this->db->query($query);
        return $avalancha;
    }

    public function getOne(){
        $query = "SELECT cantidad FROM Inventario where id = {$this->getId()};";
        $inventario = $this->db->query($query);
        return $inventario->fetch_object();
    }

    public function update(){
        $query = "UPDATE inventario set cantidad = {$this->getCantidad()}  WHERE id = {$this->getId()}";
        $save = $this->db->query($query);
        return $save;
    }

}

?>