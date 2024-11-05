<?php

namespace App\Entities;

class Medico {

  private int $idMedico;
  private string $nombre;
  private Especialidad $especialidad;
  private string $telefono;


	/**
	 * Get the value of idMedico
	 *
	 * @return  mixed
	 */
	public function getIdMedico()
	{
		return $this->idMedico;
	}

	/**
	 * Set the value of idMedico
	 *
	 * @param   mixed  $idMedico  
	 *
	 */
	public function setIdMedico($idMedico)
	{
		$this->idMedico = $idMedico;
	}

	/**
	 * Get the value of nombre
	 *
	 * @return  mixed
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Set the value of nombre
	 *
	 * @param   mixed  $nombre  
	 *
	 */
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	/**
	 * Get the value of especialidad
	 *
	 * @return  mixed
	 */
	public function getEspecialidad()
	{
		return $this->especialidad;
	}

	/**
	 * Set the value of especialidad
	 *
	 * @param   mixed  $especialidad  
	 *
	 */
	public function setEspecialidad($especialidad)
	{
		$this->especialidad = $especialidad;
	}

	/**
	 * Get the value of telefono
	 *
	 * @return  mixed
	 */
	public function getTelefono()
	{
		return $this->telefono;
	}

	/**
	 * Set the value of telefono
	 *
	 * @param   mixed  $telefono  
	 *
	 */
	public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}

  
}