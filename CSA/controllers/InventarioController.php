<?php

require_once 'helpers/helpers.php';

class inventarioController{
    public function inventario(){
        Utils::SessionON();
        require_once 'Views/inventario/inventario.php';
    }
}



?>