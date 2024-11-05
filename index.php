<?php



use App\Config\Conexion;
use App\Config\Parametros;
use App\Controllers\ErrorController;

require_once __DIR__ . '/vendor/autoload.php';

require_once './Views/layouts/header.php';



?>


<div class="row m-0">

  <?php
  require_once './Views/layouts/sidebar.php';
  ?>

  <main class="col-9">

    <?php

    function show_error()
    {
      $error = new ErrorController();
      $error->notFound();
    }

    if (isset($_GET['controller'])) {
      $nombre_controlador = "App\Controllers\\" .ucfirst( $_GET['controller'] ) . 'Controller';

    } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
      $nombre_controlador = Parametros::CONTROLLER_DEFAULT;

      echo $nombre_controlador;

    } else {
      show_error();
      exit();

    }

    if (class_exists($nombre_controlador )) {

      $controlador = new $nombre_controlador();
      
      if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {

        $action = $_GET['action'];
        $controlador->$action();

      } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $action_default = Parametros::ACTION_DEFAULT;
        $controlador->$action_default();

      } else {
        show_error();

      }

    } else {
      echo '  aca sera?';
      show_error();
    }

    ?>


  </main>

</div>

<?php 
require_once __DIR__ .'/views/layouts/footer.php';
?>