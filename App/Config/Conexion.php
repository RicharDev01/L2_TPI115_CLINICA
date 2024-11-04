<?php 

namespace App\Config;

use App\Config\Parametros;
use PDO;
use PDOException;

class Conexion {
  
  private static ?Conexion $instancia = null;
  private PDO $con;

  // uso del patron singleton
  private function __construct(){
    $this->conectarConBasedatos();
  }

  public static function obtenerInstancia(): Conexion {
    if (self::$instancia === null) {
      self::$instancia = new Conexion();
    }
    return self::$instancia;
  }

  private function conectarConBasedatos(): void {
    try {
      
      $this->con = new PDO("mysql:localhost:3306;dbname=".Parametros::DB_NAME , Parametros::USER_DB, Parametros::PASSWORD_DB);
      $this->con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      $this->con->setAttribute( PDO::ATTR_AUTOCOMMIT, false);

      //echo '<h1 class="alert alert-success">Exito de conexion 🎉</h1>';

    } catch (PDOException $e) {
      echo '<h1 class="alert alert-danger">❌ Hubo un error con la conexion a Base de datos </h1>';
      echo '<pre>';
      var_dump($e);
      echo '</pre>';
      exit();
    }
  }

  public function obtenerConexion(): PDO {
    return $this->con;
  }
}
