<?php 

namespace App\Models;

use App\Config\Conexion;
use App\Config\Parametros;
use App\Entities\Medico;
use PDO;
use PDOException;

class MedicoDao {
  
  private PDO $db;
  private EspecialidadDao $especialidadDao;

  public function __construct(){
    $this->especialidadDao = new EspecialidadDao();
    $this->db = Conexion::obtenerInstancia()->obtenerConexion();
  }

  public function listaMedicos(): array {

    try {
      
      $query = "SELECT * FROM ". Parametros::DB_NAME . ".TBL_DOCTORES";

      $result = $this->db->query($query)->fetchAll(PDO::FETCH_OBJ);

      $lista_medicos = [];

      foreach ($result as $key => $medico) {
        
        $medico_obj = $this->getMedico( $medico );

        array_push( $lista_medicos, $medico_obj );

      }

      return $lista_medicos;


    } catch (PDOException $e) {
      return [];
    }

  }

  public function medicoPorId( int $id ): ?Medico {

    try {
      
      $query = "SELECT * FROM ". Parametros::DB_NAME . ".TBL_DOCTORES WHERE DOC_ID = :ID";

      $ps = $this->db->prepare($query);
      $ps->bindParam( ":ID", $id );
      $ps->execute();
      $medico_arr = $ps->fetchAll(PDO::FETCH_OBJ);

      foreach ($medico_arr as $key => $medico) {
        
        $medico_obj = $this->getMedico( $medico );

      }

      return $medico_obj;


    } catch (PDOException $e) {
      return null;
    }

  }

  private function getMedico( $medico ): Medico {
    $medico_obj = new Medico();

    $medico_obj->setIdMedico( $medico->DOC_ID );
    $medico_obj->setNombre( $medico->DOC_NOMBRE );

    // busco la especialidad
    $especialidad = $this->especialidadDao->especialidadPorId( $medico->DOC_ESPECIALIDAD );
    // le paso la especialidad encontrada
    $medico_obj->setEspecialidad( $especialidad );
    $medico_obj->setTelefono( $medico->DOC_TELEFONO );

    return $medico_obj;
  }

}