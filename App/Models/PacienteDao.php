<?php

namespace App\Models;

use App\Config\Conexion;
use App\Config\Parametros;
use App\Entities\Paciente;
use PDO;
use PDOException;

class PacienteDao
{

  private PDO $db;

  public function __construct()
  {
    // $con = new Conexion();
    // $this->db = $con->obtenerConexion();
    $this->db = Conexion::obtenerInstancia()->obtenerConexion();

  }

  public function registrarPaciente(Paciente $paciente): bool
  {
    
    try {
      
      $this->db->beginTransaction();

      $nombre1 = $paciente->getNombre1();
      $nombre2 = $paciente->getNombre2();
      $apellido1 = $paciente->getApellido1();
      $apellido2 = $paciente->getApellido2();
      $fecha_nac = $paciente->getFecha_nac();
      $dui = $paciente->getDui();
      $telefono = $paciente->getTelefono();

      $query = "INSERT INTO 
                L2_Clinica_PP17043.TBL_PACIENTES(PAC_PRIMER_NOMBRE, PAC_SEGUNDO_NOMBRE, PAC_PRIMER_APELLIDO, PAC_SEGUNDO_APELLIDO, PAC_FECHA_NAC, PAC_DUI, PAC_TELEFONO) 
                VALUES(:NOMBRE1, :NOMBRE2, :APELLIDO1, :APELLIDO2, :FECHA_NAC, :DUI, :TELEFONO)";

      $ps = $this->db->prepare($query);
      $ps->bindParam(":NOMBRE1", $nombre1);
      $ps->bindParam(":NOMBRE2", $nombre2);
      $ps->bindParam(":APELLIDO1", $apellido1);
      $ps->bindParam(":APELLIDO2", $apellido2);
      $ps->bindParam(":FECHA_NAC", $fecha_nac);
      $ps->bindParam(":DUI", $dui);
      $ps->bindParam(":TELEFONO", $telefono);

      $res = $ps->execute();

      $this->db->commit();

      return $res;

    } catch (PDOException $e) {

      $this->db->rollBack();
      return false;
    }

  }

  public function listaPacientes(): array {

    try {
      $query = "SELECT * FROM L2_Clinica_PP17043.TBL_PACIENTES";
      $response = $this->db->query( $query );
      $pacientes_obj = $response->fetchAll(PDO::FETCH_ASSOC);

      $lista_pacientes = [];

      foreach ($pacientes_obj as $key => $paciente) {
        
        $pacienteObj = $this->getPaciente( $paciente );

        array_push( $lista_pacientes, $pacienteObj );

      }
      
      return $lista_pacientes;

    } catch (PDOException $e) {

      return [];
    } 

  }

  public function pacientePorId( int $id ): ?Paciente {

    try {
      $query = "SELECT * FROM " . Parametros::DB_NAME . ".TBL_PACIENTES WHERE PAC_ID = :ID";
      $ps = $this->db->prepare( $query );
      $ps->bindParam( ":ID", $id );
      $ps->execute();
      $pacientes_obj = $ps->fetchAll(PDO::FETCH_ASSOC);
      

      foreach ($pacientes_obj as $key => $paciente) {
        
        $pacienteObj = $this->getPaciente( $paciente );

      }

      return $pacienteObj;

    } catch (PDOException $e) {

      return null;
    } 

  }

  public function getPaciente( $paciente ): Paciente {

    $pacienteObj = new Paciente();

    $pacienteObj->setIdPaciente( $paciente['PAC_ID'] );
    $pacienteObj->setNombre1( $paciente['PAC_PRIMER_NOMBRE'] );
    $pacienteObj->setNombre2( $paciente['PAC_SEGUNDO_NOMBRE'] );
    $pacienteObj->setApellido1( $paciente['PAC_PRIMER_APELLIDO'] );
    $pacienteObj->setApellido2( $paciente['PAC_SEGUNDO_APELLIDO'] );
    $pacienteObj->setFecha_nac( $paciente['PAC_FECHA_NAC'] );
    $pacienteObj->setDui( $paciente['PAC_DUI']);
    $pacienteObj->setTelefono( $paciente['PAC_TELEFONO']);

    return $pacienteObj;

  }

}
