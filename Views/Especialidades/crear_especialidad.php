<?php

use App\Config\Parametros;
use App\Helpers;

?>

<section class="d-flex justify-content-center align-items-center h-100 flex-nowrap">


  <article class="card w-50 ">

    <?php if (isset($_SESSION['message_especialidad']) and $_SESSION['message_especialidad']): ?>
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong> <i class="bi bi-check-circle"></i> EXITO!: El especialidad se ha registrado con exito!</strong>
      </div>
    <?php elseif (isset($_SESSION['message_especialidad']) and !$_SESSION['message_especialidad']): ?>
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong> <i class="bi bi-x-square"></i> ERROR: Faltan datos del especialidad</strong>
      </div>
    <?php endif; ?>

    <?php Helpers::deleteSession('message_especialidad') ?>

    <div class="card-header">
      <h2 class="card-title">Registro de especialidades</h2>
    </div>

    <div class="card-body">

      <form action="<?php echo Parametros::BASE_URL ?>/especialidad/guardar" method="POST" >

        <div class="form-group mt-3">
          <label for="nombre-especialidad" class="form-label" >Nombre Especialidad</label>
          <input type="text" class="form-control" id="nombre-especialidad" name="nombre-especialidad" required >
        </div>

        <div class="d-grid mt-3">
          <button type="submit" class="btn btn-primary btn-lg"> Crear especialidad </button>
        </div>

    </div>

  </article>


</section>