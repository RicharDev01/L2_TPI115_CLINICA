<?php 

namespace App\Controllers;

use App\Models\MedicoDao;

class MedicoController {

  public function registrar() {

    require_once __DIR__ . '/../../Views/Medicos/crear_medico.php';

  }

  public function listar() {

    $medicoDao = new MedicoDao();

    $lista_medicos = $medicoDao->listaMedicos();

    require_once __DIR__ . '/../../Views/Medicos/lista_medicos.php';

  }

  public function guardar() {

    require_once __DIR__ . '/../../Views/Medicos/crear_medico.php';

  }

}