<?php
require_once 'Models/gastos.php';
require_once 'helpers/helpers.php';

class GastosController{

    public function index(){
        Utils::SessionON();
        
        $gastos = new Gastos();
        $tipo_gasto = $gastos->getAll();

        // Pasar el array a la vista
        require_once 'Views/gastos/gastos.php';
    }

    public function save(){
        Utils::SessionON();

        if($_POST){
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : false ;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $costo = isset($_POST['costo']) ? $_POST['costo'] : false;
            $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : false;

            $gasto = new Gastos();
            $gasto->setCantidad($cantidad);
            $gasto->setDescripcion($descripcion);
            $gasto->setCosto($costo);
            $gasto->setUser_id($user_id);

            $gastos = $gasto->save();
            
            if($gastos){
                $_SESSION['complete'] = "Se ha ingresado el gasto correctamente";
            }else{
                $_SESSION['failed'] = "Ha ocurrido un error, llena bien los datos";
            }

        }else{
            $_SESSION['failed'] = 'El sistema no ha recibido la informacion';
        }
        echo '<script> location.replace("'.base_url.'/gastos/index'.'");</script>';
    }



}




?>