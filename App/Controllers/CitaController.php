<?php 

namespace App\Controllers;

use App\Models\CitaDao;

class CitaController {

  public function citas_programadas() {

    $citaDao = new CitaDao();
    $citas_programadas = $citaDao->citas_programadas();

    require_once __DIR__ . '/../../Views/Citas/citas_programadas.php';

  }

  
  public function citas_canceladas() {

    require_once __DIR__ . '/../../Views/Citas/citas_canceladas.php';

  }


  
  public function citas_completadas() {

    require_once __DIR__ . '/../../Views/Citas/citas_completadas.php';

  }

}