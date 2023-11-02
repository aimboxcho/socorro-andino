<?php require_once 'autoload.php'?>
<?php require_once 'configs/parameters.php'?>
<?php require_once 'helpers/helpers.php'?>
<?php require_once 'chartjs/chartjs.php'?>
<?php session_start();?>

<?php if(isset($_SESSION['identity'])): ?>
  <?php require_once 'Views/layout/header-main.php' ?>
  <?php require_once 'Views/layout/sidebar.php' ?>
  <?php require_once 'Views/layout/navbar.php' ?>
<?php else: ?>
  <?php require_once 'Views/layout/header-login.php'; ?>
<?php endif; ?>
  <?php
  //Comprobando si existe el controlador a travez de la URL
  if(isset($_GET['controller'])){
      $nombre_controlador = $_GET['controller'].'Controller';
  }else if (!isset($_GET['controller']) && !isset($_GET['action']))
  {
      $nombre_controlador = controller_default;
  }
  else{
      echo "no existe";
      exit();
  }

  //Compruebo si existe el metodo en cierto controlador
  if(class_exists($nombre_controlador)){	
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
      $action = $_GET['action'];
      $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
      if(isset($_SESSION['identity'])){
        $action_default = action_default;
      }else{
        $action_default = action_login;
      }
      $controlador->$action_default();
    }else{
      echo "no existe";
    }
  }else{
    echo "no existe";
  }
  ?>
<?php if(isset($_SESSION['identity'])): ?>
  <?php require_once 'Views/layout/footer.php'; ?>
<?php endif; ?>








      