<?php 

class DATABASE{

    public static function connect(){
        $db = new mysqli("localhost", "admin", "", "SocorroAndino");
        return $db;
    }
}

?>