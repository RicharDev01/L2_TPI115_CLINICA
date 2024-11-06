<?php 

namespace App\Config;

class Parametros {


  // DATOS DE LA BASE DE DATO PARA CONEXION
  const DB_NAME             = 'L2_Clinica_PP17043';
  const USER_DB             = 'root';
  // const PASSWORD_DB         = 'database'; 
  const PASSWORD_DB         = ''; 

  // HOST PERSONALIZADO
  const BASE_URL            = 'http://laboratoriotpi.test';

  // INICIO POR DEFECTO
  const CONTROLLER_DEFAULT  = 'App\Controllers\DashboardController';
  const ACTION_DEFAULT      = 'inicio';

}
