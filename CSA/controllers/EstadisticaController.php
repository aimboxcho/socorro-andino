<?php 

require_once 'Models/voluntario.php';
require_once 'Models/registros.php';

class estadisticaController{

    public static function  TipoVoluntario(){

        $tipo_voluntario = new voluntario();

        return $tipo_voluntario;
    }

}


?>