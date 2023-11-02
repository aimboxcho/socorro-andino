<?php

require_once 'Models/afectado.php';
require_once 'helpers/helpers.php';

class afectadoController{
    public function register(){
        Utils::SessionON();
        require_once 'Views/afectado/register.php';
    }

    public function tables(){
        Utils::SessionON();
        $afectado = new Afectado();
        $afectados =  $afectado->getAll();
        require_once 'Views/afectado/tables.php';
    }


    public function save(){
        Utils::SessionON();
        if($_POST){
            $nombre =           isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $rut =              isset($_POST['rut']) ? $_POST['rut'] : false;
            $edad =             isset($_POST['edad']) ? $_POST['edad'] : false;
            $celular =          isset($_POST['celular']) ? $_POST['celular'] : false;
            $email =            isset($_POST['email']) ? $_POST['email'] : false;
            $club =             isset($_POST['club']) ? $_POST['club'] : false;
            $id_comuna =        isset($_POST['id_comuna']) ? $_POST['id_comuna'] : false;
            $experiencia =      isset($_POST['experiencia']) ? $_POST['experiencia'] : false;
            $sexo =             isset($_POST['sexo']) ? $_POST['sexo'] : false;
            $tipo_rescate =     isset($_POST['tipo_rescate']) ? $_POST['tipo_rescate'] : false;
            $fecha_rescate =    isset($_POST['fecha_rescate']) ? $_POST['fecha_rescate'] : false;
            $tiempo_hora =      isset($_POST['tiempo_hora']) ? $_POST['tiempo_hora'] : false;
            $descripcion =      isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $zona =             isset($_POST['zona']) ? $_POST['zona'] : false;
            $ruta =             isset($_POST['ruta']) ? $_POST['ruta'] : false;
            $cantidad	 =      isset($_POST['cantidad']) ? $_POST['cantidad'] : false;
            $tiempo_inicial =   isset($_POST['tiempo_inicial']) ? $_POST['tiempo_inicial'] : false;
            $tiempo_concurrido = isset($_POST['tiempo_concurrido']) ? $_POST['tiempo_concurrido'] : false;
            $tiempo_finalizado = isset($_POST['tiempo_finalizado']) ? $_POST['tiempo_finalizado'] : false;
            $desnivel_positivo = isset($_POST['desnivel_positivo']) ? $_POST['desnivel_positivo'] : false;
            $desnivel_negativo = isset($_POST['desnivel_negativo']) ? $_POST['desnivel_negativo'] : false;
            $altura_maxima	 =   isset($_POST['altura_maxima']) ? $_POST['altura_maxima'] : false;
            $distancia_recorrida = isset($_POST['distancia_recorrida']) ? $_POST['distancia_recorrida'] : false;
            $condiciones =         isset($_POST['condiciones']) ? $_POST['condiciones'] : false;
            $id_voluntario	 =     isset($_POST['id_voluntario']) ? $_POST['id_voluntario'] : false;

            $afectado = new Afectado();

            $afectado->setNombre($nombre);
            $afectado->setRut($rut);
            $afectado->setEdad($edad);
            $afectado->setCelular($celular);
            $afectado->setEmail($email);
            $afectado->setClub($club);
            $afectado->setComuna($id_comuna);
            $afectado->setExperiencia($experiencia);
            $afectado->setSexo($sexo);
            $afectado->setTipoRescate($tipo_rescate);
            $afectado->setFechaRescate($fecha_rescate);
            $afectado->setTiempoHora($tiempo_hora);
            $afectado->setDescripcion($descripcion);
            $afectado->setZona($zona);
            $afectado->setRuta($ruta);
            $afectado->setCantidad($cantidad);
            $afectado->setTiempoIncial($tiempo_inicial);
            $afectado->setTiempoConcurrido($tiempo_concurrido);
            $afectado->setTiempoFinalizado($tiempo_finalizado);
            $afectado->setDesnivelPositivo($desnivel_positivo);
            $afectado->setDesnivelNegativo($desnivel_negativo);
            $afectado->setAlturaMaxima($altura_maxima);
            $afectado->setDistanciaRecorrida($distancia_recorrida);
            $afectado->setCondiciones($condiciones);
            $afectado->setVoluntario($id_voluntario);

            $save = $afectado->save();

            if($save){
                $_SESSION['complete'] = "Se ha ingresado correctamente";
            }else{
                $_SESSION['failed'] = "Ha ocurrido un error, no se registro correctamente";
            }

            echo '<script> location.replace("'.base_url.'/afectado/tables'.'");</script>';
        }
    }

    public function delete(){
        Utils::SessionON();
        $id = $_GET['id'];
        $afectado = new Afectado();
        $afectado->setId($id);
        $save = $afectado->delete();

        if($save){
            $_SESSION['complete'] = "Se ha eliminado correctamente";
        }else{
            $_SESSION['failed'] = "No se ha podido eliminar";
        }
        echo '<script> location.replace("'.base_url.'/afectado/tables'.'");</script>';
    }


}



?>