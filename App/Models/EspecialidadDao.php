<?php 

namespace App\Models;

use App\Config\Conexion;
use App\Entities\Especialidad;
use PDO;
use PDOException;

class EspecialidadDao {

  private PDO $db;
  
  public function __construct(){

    $this->db = Conexion::obtenerInstancia()->obtenerConexion();

  }
  

  public function guardarEspecialidad(): bool {

    try {
      return true;
    } catch (PDOException $e) {
      return false;
    }

  }

  public function listaEspecialidades(): array {

    try {
      $query = "SELECT * FROM L2_Clinica_PP17043.TBL_ESPECIALIDADES";
      $result = $this->db->query( $query );

      $especialidades_arr = $result->fetchAll(PDO::FETCH_OBJ);

      $lista_especialidades = [];

      foreach ($especialidades_arr as $especialidad) {

        $especialidad_obj = $this->getEspecialidad( $especialidad );

        array_push( $lista_especialidades, $especialidad_obj );

      }

      return $lista_especialidades;
      
    } catch (PDOException $e) {
      return [];
    }

  }

  public function especialidadPorId( int $id ): ?Especialidad {

    try {
      $query = "SELECT * FROM L2_Clinica_PP17043.TBL_ESPECIALIDADES WHERE ESP_ID = :ID";
      $ps = $this->db->prepare( $query );
      $ps->bindParam( ":ID", $id );
      $ps->execute();

      $especialidad_arr = $ps->fetch(PDO::FETCH_OBJ);

      foreach ($especialidad_arr as $especialidad) {

        $especialidad_obj = $this->getEspecialidad( $especialidad );

      }

      return $especialidad_obj;
      
    } catch (PDOException $e) {
      return null;
    }

  }

  private function getEspecialidad( $especialidad ){

    $especialidad_obj = new Especialidad();

    $especialidad_obj->setEspecialidad_id( $especialidad->ESP_ID );
    $especialidad_obj->setNombre_especialidad( $especialidad->ESP_NOMBRE );

    return $especialidad_obj;

  }

}