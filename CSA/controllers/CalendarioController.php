<?php 


class calendarioController{

    public function calendario(){
        Utils::SessionON();
        require_once 'Views/calendario/calendario.php';
    }


}


?>