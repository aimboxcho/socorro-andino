<?php
require_once 'Models/voluntario.php';
require_once 'helpers/helpers.php';
require_once 'Models/registros.php';
require_once 'Models/afectado.php';

//Composer
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class voluntarioController{

    public function Main(){
        $voluntarios = new voluntario();
        $usuario = $voluntarios->getAll();

        $rescate = new Afectado();
        $rescates = $rescate->getAll();

        $rescatechart = new Afectado();
        $rescatechart->getAll();
        
        require_once 'Views/principal/dasboard.php';
    }

    public function logs(){
        $registros = new Registros();
        $registro = $registros->getAll();
        require_once 'Views/logs/logs.php';
    }

    public function ViewLogin(){
        require_once 'Views/login/login-origin.php';
    }

    public function register(){
        Utils::SessionON();
        require_once 'Views/voluntario/register.php';
    }

    public function tables(){
        Utils::SessionON();
        $voluntarios = new voluntario();
        $user = $voluntarios->getAll();
        require_once 'Views/voluntario/tables.php';
    }

    public function user(){
        Utils::SessionON();
        require_once 'Views/voluntario/user.php';
    }

    public function userU(){
        Utils::SessionON();
        $id = $_GET['id'];
        $voluntario_user = new voluntario();
        $voluntario_user->setId($id);
        $voluntario = $voluntario_user->getOne();
        require_once 'Views/voluntario/userU.php';
    }

    public function save(){
        Utils::SessionON();
        if(isset($_POST)){
            $rut = isset($_POST['rut_volun']) ? $_POST['rut_volun'] : false;
            $nombre = isset($_POST['nombres_volun']) ? $_POST['nombres_volun'] : false;
            $apellido = isset($_POST['apellido_volun']) ? $_POST['apellido_volun'] : false;
            $email = isset($_POST['email_volun']) ? $_POST['email_volun'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $edad = isset($_POST['edad_volun']) ? $_POST['edad_volun'] : false;
            $fecha = isset($_POST['fecha_naci_volun']) ? $_POST['fecha_naci_volun'] : false;
            $telefono = isset($_POST['telefono_volun']) ? $_POST['telefono_volun'] : false;
            $ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : false;
            $enfermedad = isset($_POST['enfermedad_volun']) ? $_POST['enfermedad_volun'] : false;
            $alergia = isset($_POST['alergia_volun']) ? $_POST['alergia_volun'] : false;
            $tipo_voluntario = isset($_POST['tipo_volun']) ? $_POST['tipo_volun'] : false;
            $tipo_sangre = isset($_POST['$tipo_sangre']) ? $_POST['tipo_sangre'] : false;
            $descripcion = isset($_POST['descripcion_volun']) ? $_POST['descripcion_volun'] : false;

            $voluntario = new voluntario();
            $voluntario->setRut($rut); 
            $voluntario->setNombre($nombre);
            $voluntario->setApellido($apellido);
            $voluntario->setEmail($email);
            $voluntario->setPassword($password);
            $voluntario->setEdad($edad);
            $voluntario->setFechaNacimiento($fecha);
            $voluntario->setTelefono($telefono);
            $voluntario->setOcupacion($ocupacion);
            $voluntario->setEnfermedad($enfermedad);
            $voluntario->setAlergia($alergia);
            $voluntario->setTipoVoluntario($tipo_voluntario);
            $voluntario->setTipoSangre($tipo_sangre);
            $voluntario->setDescripcion($descripcion);
            
            if(isset($_FILES['imagen_volun'])){
                $file = $_FILES['imagen_volun'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){

                    if(!is_dir('uploads/images')){
                        mkdir('uploads/images', 0777, true);
                    }

                    $voluntario->setImagen($filename);
                    move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                }
            }
            $guardar = $voluntario->save();

            if($guardar){
                $_SESSION['complete'] = "Registro Exitoso";

                require 'vendor/autoload.php';

                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);
                
                try {
                    //Server settings
                    $mail->SMTPDebug = 0;                      //Si es 0, sin debug, si es 2 es con debug
                    $mail->isSMTP();  
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'comun.familia2022@gmail.com'; 
                    $mail->Password   = 'wzpdoqgjngwfmrue';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //ssl si tien candado, stl, si no tinee
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                    //Recipients
                    $mail->setFrom('comun.familia2022@gmail.com', 'Socorro Andino');
                    $mail->addAddress($email, $nombre);     //Add a recipient
                    //$mail->addAddress('ellen@example.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');
                
                    //Attachments
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Se ha registrado tu cuenta';
                    $mail->Body    = 'Bienvenido '.$nombre.' Cuerpo de Socorro Andino, da a conocer que tu registro fue exitoso, para saber tu contraseña, 
                    Contactarse la directiva. <b>Esperamos tu ingreso!</b>';
                    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                    $mail->send();
                } catch (Exception $e) {
                    echo "Error al enviar. Mailer Error: {$mail->ErrorInfo}";
                }

            }else{
                $_SESSION['complete'] = "El registro Fracaso";
            }
        }else{
            $_SESSION['complete'] = "El registro Fracaso";
        }
        echo '<script> location.replace("'.base_url.'/voluntario/tables'.'");</script>';
    }

    public function login(){
        if(isset($_POST)){
            $email = isset($_POST['email_volun']) ? $_POST['email_volun'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            $voluntario = new voluntario();
            $voluntario->setEmail($email);
            $voluntario->setPassword($password);
            $identity = $voluntario->login();

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
            }else{
                $_SESSION['complete'] = "Fallo el ingreso";
            }
        }
        header("Location:".base_url);

    }

    public function update(){
        Utils::SessionON();
        $id = $_GET['id'];
        $update = new voluntario();
        $update->setId($id);
        $user = $update->getOne();
        require_once 'Views/voluntario/update.php';
    }

    public function updatesave(){
        Utils::SessionON();
        $update = new voluntario();
        $update->setEmail($_POST['email_volun']);
        $update->setEdad($_POST['edad_volun']);
        $update->setTelefono($_POST['telefono_volun']);
        $update->setOcupacion($_POST['ocupacion']);
        $update->setTipoVoluntario($_POST['tipo_volun']);
        $update->setEnfermedad($_POST['enfermedad_volun']);
        $update->setAlergia($_POST['alergia_volun']);
        $update->setDescripcion($_POST['descripcion_volun']);

        $id = $_GET['id'];
        $update->setId($id);
        $updatesave = $update->update();
        if($updatesave){
            $_SESSION['complete'] = "Se ha actualizado la informacion del voluntario";
        }else{
            $_SESSION['failed'] = "No se ha podido actualizar";
        }
        echo '<script> location.replace("'.base_url.'/voluntario/tables'.'");</script>';
    }

    public function delete(){
        Utils::SessionON();
        $id = $_GET['id'];
        $delete = new voluntario();
        $delete->setId($id);
        $deleteuser = $delete->delete();

        if($deleteuser){
            $_SESSION['complete'] = "Se ha eliminado el voluntario correctamente";
        } else {
            $_SESSION['failed'] = "No se ha podido eliminar correctamente";
        }
        echo '<script> location.replace("'.base_url.'/voluntario/tables'.'");</script>';
    }


    public function logout(){
        Utils::SessionON();
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        echo '<script> location.replace("'.base_url.'");</script>';
    }
}




?>