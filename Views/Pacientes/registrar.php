<?php

use App\Config\Parametros;
use App\Helpers;

?>

<section class="d-flex justify-content-center align-items-center h-100 flex-nowrap">



  <article class="card w-75 ">

    <?php if (isset($_SESSION['message_paciente']) and $_SESSION['message_paciente']): ?>
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong> <i class="bi bi-check-circle"></i> EXITO!: El paciente se ha registrado con exito!</strong>
      </div>
    <?php elseif (isset($_SESSION['message_paciente']) and !$_SESSION['message_paciente']): ?>
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong> <i class="bi bi-x-square"></i> ERROR: Faltan datos del paciente</strong>
      </div>
    <?php endif; ?>

    <?php Helpers::deleteSession('message_paciente') ?>

    <div class="card-header">
      <h2 class="card-title">Registro de pacientes</h2>
    </div>

    <div class="card-body">

      <form action="<?php echo Parametros::BASE_URL ?>/paciente/guardar" method="POST" >

        <div class="row">

          <div class="form-group mt-3 col-6" >
            <label for="nombre1">Primer Nombre:</label>
            <input type="text" class="form-control" id="nombre1" name="nombre1" required >

          </div>

          <div class="form-group mt-3 col-6">
            <label for="nombre2">Segundo Nombre:</label>
            <input type="text" class="form-control" id="nombre2" name="nombre2">
          </div>

        </div>

        <div class="row">

          <div class="form-group mt-3 col-6">
            <label for="apellido1">Primer Apellido:</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" required>
          </div>

          <div class="form-group mt-3 col-6">
            <label for="apellido2">Segundo Apellido:</label>
            <input type="text" class="form-control" id="apellido2" name="apellido2">
          </div>

        </div>

        <div class="form-group mt-3">
          <label for="fecha-nac">Fecha Nacimiento:</label>
          <input type="date" class="form-control" id="fecha-nac" name="fecha-nac" required >
         
        </div>

        <div class="form-group mt-3">
          <label for="dui">DUI:</label>
          <input type="text" class="form-control" id="dui" name="dui" required maxlength="10">
        </div>

        <div class="form-group mt-3">
          <label for="telefono">Telefono:</label>
          <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>

        <div class="d-grid mt-3">
          <button type="submit" class="btn btn-primary btn-lg"> Registrar Paciente </button>
        </div>

    </div>

  </article>


</section>