<?php 

    require_once 'configs/database.php';

    class voluntario{
        private $id;                  
        private $rut_volun;           
        private $nombres_volun;       
        private $apellido_volun;     
        private $fecha_naci_volun;   
        private $edad_volun;          
        private $email_volun; 
        private $password;    
        private $telefono_volun;      
        private $ocupacion;           
        private $tipo_volun;          
        private $enfermedad_volun;    
        private $alergia_volun;       
        private $tipo_sangre;         
        private $descripcion_volun;   
        private $imagen_volun;        
        private $db;

        public function __construct()
        {
            $this->db = DATABASE::connect();
        }

        public function getId(){
            return $this->id;
        }

        public function getRut(){
            return $this->rut_volun;
        }

        public function getNombres(){
            return $this->nombres_volun;
        }

        public function getApellidos(){
            return $this->apellido_volun;
        }

        public function getFechaNacimiento(){
            return $this->fecha_naci_volun;
        }

        public function getEdad(){
            return $this->edad_volun;
        }

        public function getEmail(){
            return $this->email_volun;
        }
        
        public function getPassword(){
            return password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 4]);
        }

        public function getTelefono(){
            return $this->telefono_volun;
        }

        public function getOcupacion(){
            return $this->ocupacion;
        }

        public function getTipo(){
            return $this->tipo_volun;
        }

        public function getEnfermedad(){
            return $this->enfermedad_volun;
        }

        public function getAlergia(){
            return $this->alergia_volun;
        }

        public function getTipoSangre(){
            return $this->tipo_sangre;
        }

        public function getDescripcion(){
            return $this->descripcion_volun;
        }

        public function getImagen(){
            return $this->imagen_volun;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setRut($rut_volun){
            $this->rut_volun = $rut_volun;
        }
 
        public function setNombre($nombres_volun){
            $this->nombres_volun = $nombres_volun;
        }

        public function setApellido($apellido_volun){
            $this->apellido_volun = $apellido_volun;
        }

        public function setFechaNacimiento($fecha_naci_volun){
            $this->fecha_naci_volun = $fecha_naci_volun;
        }

        public function setEdad($edad_volun){
            $this->edad_volun = $edad_volun;
        }

        public function setEmail($email_volun){
            $this->email_volun = $email_volun;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setTelefono($telefono_volun){
            $this->telefono_volun = $telefono_volun;
        }

        public function setOcupacion($ocupacion){
            $this->ocupacion = $ocupacion;
        }

        public function setTipoVoluntario($tipo_volun){
            $this->tipo_volun = $tipo_volun;
        }

        public function setEnfermedad($enfermedad_volun){
            $this->enfermedad_volun = $enfermedad_volun;
        }   

        public function setAlergia($alergia_volun){
            $this->alergia_volun = $alergia_volun;
        }

        public function setTipoSangre($tipo_sangre){
            $this->tipo_sangre = $tipo_sangre;
        }

        public function setDescripcion($descripcion_volun){
            $this->descripcion_volun = $descripcion_volun;
        }

        public function setImagen($imagen_volun){
            $this->imagen_volun = $imagen_volun;
        }

        public function getAll(){
            $query = "SELECT * FROM voluntarios";
            $voluntarios = $this->db->query($query);
            return $voluntarios;
        }

        public function getOne(){
            $query = "SELECT * FROM voluntarios WHERE id = {$this->getId()}";
            $voluntario = $this->db->query($query);
            return $voluntario->fetch_object();
        }

        public function save(){
            $query = "INSERT INTO voluntarios VALUES(NULL, '{$this->getRut()}','{$this->getNombres()}','{$this->getApellidos()}','{$this->getFechaNacimiento()}',{$this->getEdad()},'{$this->getEmail()}', '{$this->getPassword()}', {$this->getTelefono()}, '{$this->getOcupacion()}', '{$this->getTipo()}', '{$this->getEnfermedad()}', '{$this->getAlergia()}',  '{$this->getTipoSangre()}',  '{$this->getDescripcion()}', '{$this->getImagen()}')";
            $save = $this->db->query($query);

            if($save){
                $result = true;
                $registro = "INSERT INTO registros VALUES(NULL, 'Se ha ingresado un registro de Voluntario', NOW());";
                $this->db->query($registro);
            }else{
                $result = false;
            }
            
            return $result;
        }

        public function update(){
            $query = "UPDATE voluntarios set edad_volun = {$this->getEdad()}, email_volun = '{$this->getEmail()}', telefono_volun  = {$this->getTelefono()}, ocupacion = '{$this->getOcupacion()}', tipo_volun = '{$this->getTipo()}', enfermedad_volun = '{$this->getEnfermedad()}', alergia_volun = '{$this->getAlergia()}', descripcion_volun = '{$this->getDescripcion()}' WHERE id = {$this->getId()}";
            $save = $this->db->query($query);

            if($save){
                $result = true;
                $usuario = $_SESSION['identity']->id;
                $registro = "INSERT INTO registros VALUES(NULL, 'Se ha actualizado cantidad de un articulo de inventario', NOW(), $usuario);";
                $this->db->query($registro);
            }else{
                $result = false;
            }
            
            return $result;
        }

        public function delete(){
            $query = "DELETE FROM voluntarios WHERE id = {$this->getId()}";
            $save = $this->db->query($query);
        
            if($save){
                $result = true;
                $usuario = $_SESSION['identity']->id;
                $registro = "INSERT INTO registros VALUES(NULL, 'Se ha eliminado un voluntario', NOW(), $usuario);";
                $this->db->query($registro);
            } else {
                $result = false;
            }
            
            return $result;
        }

        public function login(){
            $result = false;
            $email = $this->email_volun;
            $password = $this->password;
            $query = "SELECT * FROM voluntarios WHERE email_volun = '$email'";
            $login = $this->db->query($query);

            if($login && $login->num_rows == 1){
                $user = $login->fetch_object();
                $verify = password_verify($password, $user->password);

                if($verify){
                    $result = $user;
                }
            }
            return $result;
        }
    }

?>