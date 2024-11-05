<?php 

namespace App\Entities;

class Paciente {
  
  private int $idPaciente; 
  private string $nombre1; 
  private string $nombre2; 
  private string $apellido1; 
  private string $apellido2; 
  private $fecha_nac; 
  private string $dui; 
  private string $telefono; 


  /**
   * Get the value of idPaciente
   */ 
  public function getIdPaciente()
  {
    return $this->idPaciente;
  }

	/**
	 * Set the value of idPaciente
	 *
	 * @param mixed  $idPaciente  
	 */
	public function setIdPaciente($idPaciente)
	{
		$this->idPaciente = $idPaciente;
	}

  /**
   * Get the value of nombre1
   */ 
  public function getNombre1()
  {
    return $this->nombre1;
  }

	/**
	 * Set the value of nombre1
	 *
	 * @param mixed  $nombre1  
	 */
	public function setNombre1($nombre1)
	{
		$this->nombre1 = $nombre1;
	}

  /**
   * Get the value of nombre2
   */ 
  public function getNombre2()
  {
    return $this->nombre2;
  }

	/**
	 * Set the value of nombre2
	 *
	 * @param mixed  $nombre2  
	 */
	public function setNombre2($nombre2)
	{
		$this->nombre2 = $nombre2;
	}

  /**
   * Get the value of apellido1
   */ 
  public function getApellido1()
  {
    return $this->apellido1;
  }

	/**
	 * Set the value of apellido1
	 *
	 * @param mixed  $apellido1  
	 */
	public function setApellido1($apellido1)
	{
		$this->apellido1 = $apellido1;
	}

  /**
   * Get the value of apellido2
   */ 
  public function getApellido2()
  {
    return $this->apellido2;
  }

	/**
	 * Set the value of apellido2
	 *
	 * @param mixed  $apellido2  
	 */
	public function setApellido2($apellido2)
	{
		$this->apellido2 = $apellido2;
	}

  /**
   * Get the value of fecha_nac
   */ 
  public function getFecha_nac()
  {
    return $this->fecha_nac;
  }

	/**
	 * Set the value of fecha_nac
	 *
	 * @param mixed  $fecha_nac  
	 */
	public function setFecha_nac($fecha_nac)
	{
		$this->fecha_nac = $fecha_nac;
	}

  /**
   * Get the value of dui
   */ 
  public function getDui()
  {
    return $this->dui;
  }

	/**
	 * Set the value of dui
	 *
	 * @param mixed  $dui  
	 */
	public function setDui($dui)
	{
		$this->dui = $dui;
	}

  /**
   * Get the value of telefono
   */ 
  public function getTelefono()
  {
    return $this->telefono;
  }

	/**
	 * Set the value of telefono
	 *
	 * @param mixed  $telefono  
	 */
	public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}

  
}
