<?php 

namespace App\Controllers;

use App\Models\EspecialidadDao;

class EspecialidadController {

  public function registrar(){

    require_once __DIR__ . '/../../Views/Especialidades/crear_especialidad.php';

  }

  public function listar(){

    $especialidadDao = new EspecialidadDao();
    $lista_especialidades = $especialidadDao->listaEspecialidades();

    require_once __DIR__ . '/../../Views/Especialidades/lista_especialidades.php';

  }

  public function guardar(){


    require_once __DIR__ . '/../../Views/Especialidades/crear_especialidad.php';

  }

  
  public function eliminar(){

    require_once __DIR__ . '/../../Views/Especialidades/crear_especialidad.php';

  }

  public function getEspecialidades(): array {
    $especialidadDao = new EspecialidadDao();
    return $especialidadDao->listaEspecialidades();
  }

}