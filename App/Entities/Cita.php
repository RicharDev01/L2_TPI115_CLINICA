<?php 

namespace App\Entities;

class Cita {

  private int $cita_id;
  private $fecha;
  private $hora;
  private Paciente $paciente;
  private Medico $medico;
  private string $estado;


	/**
	 * Get the value of cita_id
	 *
	 * @return  mixed
	 */
	public function getCita_id()
	{
		return $this->cita_id;
	}

	/**
	 * Set the value of cita_id
	 *
	 * @param   mixed  $cita_id  
	 *
	 */
	public function setCita_id($cita_id)
	{
		$this->cita_id = $cita_id;
	}

	/**
	 * Get the value of fecha
	 *
	 * @return  mixed
	 */
	public function getFecha()
	{
		return $this->fecha;
	}

	/**
	 * Set the value of fecha
	 *
	 * @param   mixed  $fecha  
	 *
	 */
	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	/**
	 * Get the value of hora
	 *
	 * @return  mixed
	 */
	public function getHora()
	{
		return $this->hora;
	}

	/**
	 * Set the value of hora
	 *
	 * @param   mixed  $hora  
	 *
	 */
	public function setHora($hora)
	{
		$this->hora = $hora;
	}

	/**
	 * Get the value of paciente
	 *
	 * @return  mixed
	 */
	public function getPaciente()
	{
		return $this->paciente;
	}

	/**
	 * Set the value of paciente
	 *
	 * @param   mixed  $paciente  
	 *
	 */
	public function setPaciente($paciente)
	{
		$this->paciente = $paciente;
	}

	/**
	 * Get the value of medico
	 *
	 * @return  mixed
	 */
	public function getMedico()
	{
		return $this->medico;
	}

	/**
	 * Set the value of medico
	 *
	 * @param   mixed  $medico  
	 *
	 */
	public function setMedico($medico)
	{
		$this->medico = $medico;
	}

	/**
	 * Get the value of estado
	 *
	 * @return  mixed
	 */
	public function getEstado()
	{
		return $this->estado;
	}

	/**
	 * Set the value of estado
	 *
	 * @param   mixed  $estado  
	 *
	 */
	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

  
}