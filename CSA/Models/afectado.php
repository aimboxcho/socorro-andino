<?php

require_once 'configs/database.php';

class Afectado{

    private $id;
    private $nombre;
    private $rut;
    private $edad;
    private $celular;
    private $email;
    private $club;
    private $id_comuna;
    private $experiencia;
    private $sexo;
    private $tipo_rescate;
    private $fecha_rescate;
    private $tiempo_hora;
    private $descripcion;
    private $zona;
    private $ruta;
    private $cantidad;
    private $tiempo_inicial;
    private $tiempo_concurrido;
    private $tiempo_finalizado;
    private $desnivel_positivo;
    private $desnivel_negativo;
    private $altura_maxima;
    private $distancia_recorrida;
    private $condiciones;
    private $id_voluntario;
    private $db;

    public function __construct()
    {
        $this->db = DATABASE::connect();
    }

    public function getId(){return $this->id;}
    public function getNombre(){return $this->nombre;}
    public function getRut(){return $this->rut;}
    public function getEdad(){return $this->edad;}
    public function getCelular(){return $this->celular;}
    public function getEmail(){return $this->email;}
    public function getClub(){return $this->club;}
    public function getComuna(){return $this->id_comuna;}
    public function getExperiencia(){return $this->experiencia;}
    public function getSexo(){return $this->sexo;}
    public function getTipoRescate(){return $this->tipo_rescate;}
    public function getFechaRescate(){return $this->fecha_rescate;}
    public function getTiempoHora(){return $this->tiempo_hora;}
    public function getDescripcion(){return $this->descripcion;}
    public function getZona(){return $this->zona;}
    public function getRuta(){return $this->ruta;}
    public function getCantidad(){return $this->cantidad;}
    public function getTiempoIncial(){return $this->tiempo_inicial;}
    public function getTiempoConcurrido(){return $this->tiempo_concurrido;}
    public function getTiempoFinalizado(){return $this->tiempo_finalizado;}
    public function getDesnivelPositivo(){return $this->desnivel_positivo;}
    public function getDesnivelNegativo(){return $this->desnivel_negativo;}
    public function getAlturaMaxima(){return $this->altura_maxima;}
    public function getDistanciaRecorrida(){return $this->distancia_recorrida;}
    public function getCondiciones(){return $this->condiciones;}
    public function getVoluntario(){return $this->id_voluntario;}

    public function setId($id){$this->id = $id;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    public function setRut($rut){$this->rut = $rut;}
    public function setEdad($edad){$this->edad = $edad;}
    public function setCelular($celular){$this->celular = $celular;}
    public function setEmail($email){$this->email = $email;}
    public function setClub($club){$this->club = $club;}
    public function setComuna($id_comuna){$this->id_comuna = $id_comuna;}
    public function setExperiencia($experiencia){$this->experiencia = $experiencia;}
    public function setSexo($sexo){$this->sexo = $sexo;}
    public function setTipoRescate($tipo_rescate){$this->tipo_rescate = $tipo_rescate;}
    public function setFechaRescate($fecha_rescate){$this->fecha_rescate = $fecha_rescate;}
    public function setTiempoHora($tiempo_hora){$this->tiempo_hora = $tiempo_hora;}
    public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
    public function setZona($zona){$this->zona = $zona;}
    public function setRuta($ruta){$this->ruta = $ruta;}
    public function setCantidad($cantidad){$this->cantidad = $cantidad;}
    public function setTiempoIncial($tiempo_inicial){$this->tiempo_inicial = $tiempo_inicial;}
    public function setTiempoConcurrido($tiempo_concurrido){$this->tiempo_concurrido = $tiempo_concurrido;}
    public function setTiempoFinalizado($tiempo_finalizado){$this->tiempo_finalizado = $tiempo_finalizado;}
    public function setDesnivelPositivo($desnivel_positivo){$this->desnivel_positivo = $desnivel_positivo;}
    public function setDesnivelNegativo($desnivel_negativo){$this->desnivel_negativo = $desnivel_negativo;}
    public function setAlturaMaxima($altura_maxima){$this->altura_maxima = $altura_maxima;}
    public function setDistanciaRecorrida($distancia_recorrida){$this->distancia_recorrida = $distancia_recorrida;}
    public function setCondiciones($condiciones){$this->condiciones = $condiciones;}
    public function setVoluntario($id_voluntario){$this->id_voluntario = $id_voluntario;}

    public function getAll(){
        $query = "SELECT r.*, v.nombres_volun as voluntario, v.id as id_voluntario, r.id as id_rescate FROM Rescate r INNER JOIN voluntarios v ON r.id_voluntario = v.id";
        $save = $this->db->query($query);
        return $save;
    }

    public function getOne(){
        $query = "SELECT * FROM Rescate WHERE id = {$this->getId()}";
        $save = $this->db->query($query);
        return $save->fetch_object();
    }

    public function save(){
        $query = "INSERT INTO Rescate VALUES(NULL,'{$this->getRut()}','{$this->getNombre()}', {$this->getEdad()}, {$this->getCelular()}, '{$this->getEmail()}', '{$this->getClub()}', {$this->getComuna()} , {$this->getExperiencia()}, '{$this->getSexo()}', '{$this->getTipoRescate()}', '{$this->getFechaRescate()}', '{$this->getTiempoHora()}', '{$this->getDescripcion()}', '{$this->getZona()}', '{$this->getRuta()}', {$this->getCantidad()}, '{$this->getTiempoIncial()}', '{$this->getTiempoConcurrido()}', '{$this->getTiempoFinalizado()}', {$this->getDesnivelPositivo()} , {$this->getDesnivelNegativo()}, {$this->getAlturaMaxima()}, {$this->getDistanciaRecorrida()}, '{$this->getCondiciones()}', {$this->getVoluntario()})";
        $save = $this->db->query($query);

        if($save){
            $response = true;
            $usuario = $_SESSION['identity']->id;
            $registro = "INSERT INTO registros VALUES(NULL, 'Se ha actualizado cantidad de un articulo de inventario', NOW(), $usuario);";            
            $this->db->query($registro);
        }else{
            $response = false;
        }
        return $response;
    }

    public function delete(){
        $query = "DELETE FROM rescate WHERE id = {$this->getId()}";
        $save = $this->db->query($query);

        if($save){
            $response = true;
            $usuario = $_SESSION['identity']->id;
            $registro = "INSERT INTO registros VALUES(NULL, 'Se ha actualizado cantidad de un articulo de inventario', NOW(), $usuario);";            
            $this->db->query($registro);
        }else{
            $response = false;
        }
        return $response;
    }


    public function getAllChart(){
        $query = "SELECT count(id) as cantidad, zona, tipo_rescate FROM Rescate GROUP BY zona";
        $save = $this->db->query($query);
        return $save;
    }

    public function getAllChart2(){
        $query = "SELECT count(id) as cantidades, tipo_rescate  FROM Rescate GROUP BY tipo_rescate";
        $save = $this->db->query($query);
        return $save;
    }

    public function getAllPie(){
        $query = "SELECT count(id) as cantidades, zona  FROM Rescate GROUP BY zona";
        $save = $this->db->query($query);
        return $save;
    }

    public function getAllLine(){
        $query = "SELECT count(id) as cantidades, DATE_FORMAT(fecha_rescate, '%Y-%m') as mes_anio  FROM Rescate GROUP BY mes_anio";
        $save = $this->db->query($query);
        return $save;
    }
}



?>