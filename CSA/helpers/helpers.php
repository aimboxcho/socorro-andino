<?php 

class Utils{

    public static function SessionON(){
        if(!isset($_SESSION['identity'])){
            header("Location:".base_url);
        }
    }

    public static function deletemessage(){
        if(isset($_SESSION['complete'])){
            unset($_SESSION['complete']);
        }
        if(isset($_SESSION['failed'])){
            unset($_SESSION['failed']);
        }
    }

    public static function ShowVoluntarios(){
        require_once 'Models/voluntario.php';
        $voluntario = new Voluntario();
        $voluntarios = $voluntario->getAll();
        return $voluntarios;
    }

    public static function ShowComunas(){
        require_once 'Models/comuna.php';
        $comuna = new Comuna();
        $comunas = $comuna->getAll();
        return $comunas;
    }


    
}



?>