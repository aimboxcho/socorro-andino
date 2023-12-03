<?php 

class DATABASE{

    public static function connect(){
        $db = new mysqli("localhost", "root", "", "SocorroAndino");
        return $db;
    }
}

?>