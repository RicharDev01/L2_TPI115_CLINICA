<?php

namespace App\Controllers;

use App\Config\Parametros;
use App\Entities\Paciente;
use App\Models\PacienteDao;

class PacienteController
{

  public function registrar(): void
  {
    require_once __DIR__ . '/../../Views/pacientes/registrar.php';
  }

  public function guardar(): void
  {


    $_SESSION['message_paciente'] = false;

    if (
      isset($_POST)
      && !empty($_POST['nombre1'])
      && !empty($_POST['apellido1'])
      && !empty($_POST['fecha-nac'])
      && !empty($_POST['dui'])
      && !empty($_POST['telefono'])
    ) {


      $nombre1 = $_POST['nombre1'];
      $nombre2 = $_POST['nombre2'];
      $apellido1 = $_POST['apellido1'];
      $apellido2 = $_POST['apellido2'];
      $fecha_nac = $_POST['fecha-nac'];
      $dui = $_POST['dui'];
      $telefono = $_POST['telefono'];
      
      $paciente = new Paciente();

      $paciente->setNombre1( $nombre1 );
      $paciente->setNombre2( $nombre2 );
      $paciente->setApellido1( $apellido1 );
      $paciente->setApellido2( $apellido2 );
      $paciente->setFecha_nac( $fecha_nac );
      $paciente->setDui( $dui );
      $paciente->setTelefono( $telefono );
      
      $pacienteDao = new PacienteDao();

      $_SESSION['message_paciente'] = $pacienteDao->registrarPaciente( $paciente );

      require_once __DIR__ . '/../../Views/pacientes/registrar.php';

    } else {

      $_SESSION['message_paciente'] = false;

      require_once __DIR__ . '/../../Views/pacientes/registrar.php';

    }

  }

  public function listar() {

    $pacienteDao = new PacienteDao();
    $lista_pacientes = $pacienteDao->listaPacientes();

    require_once __DIR__ ."/../../Views/Pacientes/lista_pacientes.php";

  }
  
}
