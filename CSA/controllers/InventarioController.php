<?php

require_once 'helpers/helpers.php';
require_once 'Models/inventario.php';

class inventarioController{           
    public function inventario(){
        Utils::SessionON();

        $inventario = new Inventario();
        $inventarios = $inventario->getAll();

        $montana = new Inventario();
        $montanas = $montana->getEM();
        
        $ferreteria = new Inventario();
        $ferreterias = $ferreteria->getFerreteria();

        $invernal = new Inventario();
        $invernales = $invernal->getInvental();

        $inmovilizador = new Inventario();
        $inmovilizadores = $inmovilizador->getI();

        $avalancha = new Inventario();
        $avalanchas = $avalancha->getA();

        require_once 'Views/inventario/inventario.php';
    }

    public function save(){
        if($_POST){
            $tipo = isset($_POST['tipo_objeto']) ? $_POST['tipo_objeto'] : false;
            $nombre = isset($_POST['nombreObjeto']) ? $_POST['nombreObjeto'] : false;
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : false;
            $color = isset($_POST['color']) ? $_POST['color'] : false;
            $observacion = isset($_POST['observacion']) ? $_POST['observacion'] : false;
            $registrador = isset($_POST['registrador']) ? $_POST['registrador'] : false;

            $registrar = new inventario();
            $registrar->setTipo($tipo);
            $registrar->setNombre($nombre);
            $registrar->setCantidad($cantidad);
            $registrar->setColor($color);
            $registrar->setObservacion($observacion);
            $registrar->setRegistrador($registrador);

            $registrando = $registrar->save();

            if($registrando){
                $_SESSION['complete'] = "Registro Exitoso";
            }else{
                $_SESSION['complete'] = "El registro Fracaso";

            }
            echo '<script> location.replace("'.base_url.'/inventario/inventario'.'");</script>';

        }

    }

    public function operacion() {
        $id = $_POST['id'];
        $operacion = $_POST['operacion'];
    
        $inventarioModel = new Inventario(); // Asegúrate de que estás utilizando el modelo correcto.
    
        $inventarioModel->setId($id);
        $inventario = $inventarioModel->getOne();
    
        if ($inventario) {
            $cantidad_actual = $inventario->cantidad;
    
            if ($operacion === 'sumar') {
                $nueva_cantidad = $cantidad_actual + 1;
            } elseif ($operacion === 'restar' && $cantidad_actual > 0) {
                $nueva_cantidad = $cantidad_actual - 1;
            }
    
            $inventarioModel->setCantidad($nueva_cantidad);
            $inventarioModel->update();

        }
    }
}

?>