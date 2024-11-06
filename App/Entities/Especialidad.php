<?php 

namespace App\Entities;

class Especialidad {

  private int $especialidad_id;
  private string $nombre_especialidad;
  


	/**
	 * Get the value of especialidad_id
	 *
	 * @return  mixed
	 */
	public function getEspecialidad_id()
	{
		return $this->especialidad_id;
	}

	/**
	 * Set the value of especialidad_id
	 *
	 * @param   mixed  $especialidad_id  
	 *
	 */
	public function setEspecialidad_id($especialidad_id)
	{
		$this->especialidad_id = $especialidad_id;
	}

	/**
	 * Get the value of nombre_especialidad
	 *
	 * @return  mixed
	 */
	public function getNombre_especialidad()
	{
		return $this->nombre_especialidad;
	}

	/**
	 * Set the value of nombre_especialidad
	 *
	 * @param   mixed  $nombre_especialidad  
	 *
	 */
	public function setNombre_especialidad($nombre_especialidad)
	{
		$this->nombre_especialidad = $nombre_especialidad;
	}
}