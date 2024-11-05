<?php 

namespace App\Models;

use App\Config\Conexion;
use App\Config\Parametros;
use App\Entities\Cita;
use PDO;
use PDOException;

class CitaDao {

  private PDO $db;
  private PacienteDao $pacienteDao;
  private MedicoDao $medicoDao;

  public function __construct(){
    $this->pacienteDao = new PacienteDao();
    $this->medicoDao = new MedicoDao();
    $this->db = Conexion::obtenerInstancia()->obtenerConexion();
  }

  public function citas_programadas(): array {

    try {
      $query = "SELECT * FROM " . Parametros::DB_NAME . ".TBL_CITAS WHERE CIT_ESTADO = 'PROGRAMADA'";
      $result = $this->db->query($query)->fetchAll(PDO::FETCH_OBJ);

      $citas_programadas = [];

      foreach ($result as $key => $cita) {
       
        $cita_obj = $this->getCita( $cita );

        array_push( $citas_programadas, $cita_obj );
      }

      return $citas_programadas;

    } catch (PDOException $e) {
      return [];
    }    

  }

  private function getCita( $cita ): Cita {

    $cita_obj = new Cita();
    $cita_obj->setCita_id( $cita->CIT_ID );
    $cita_obj->setFecha( $cita->CIT_FECHA );
    $cita_obj->setHora( $cita->CIT_HORA );

    $paciente = $this->pacienteDao->pacientePorId( $cita->CIT_PACIENTE );
    $cita_obj->setPaciente( $paciente );

    $medico = $this->medicoDao->medicoPorId( $cita->CIT_DOCTOR );
    $cita_obj->setMedico( $medico );

    $cita_obj->setEstado( $cita->CIT_ESTADO );

    return $cita_obj;

  }

}
