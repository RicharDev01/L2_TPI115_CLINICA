<?php 

namespace App\Controllers;

class ErrorController {
  
  public function notFound(){

    require_once __DIR__ . '/../../Views/Errors/not_found.php';

  }

}
