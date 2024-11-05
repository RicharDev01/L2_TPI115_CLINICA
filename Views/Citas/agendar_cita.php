<?php

use App\Config\Parametros;
use App\Controllers\EspecialidadController;
use App\Helpers;

$espControl = new EspecialidadController();
$lista_especialidades = $espControl->getEspecialidades();

?>

<section class="d-flex justify-content-center align-items-center h-100 flex-nowrap">


  <article class="card w-75 ">

    <?php if (isset($_SESSION['message_cita']) and $_SESSION['message_cita']): ?>
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong> <i class="bi bi-check-circle"></i> ÉXITO!: La cita se ha registrado con éxito!</strong>
      </div>
    <?php elseif (isset($_SESSION['message_cita']) and !$_SESSION['message_cita']): ?>
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong> <i class="bi bi-x-square"></i> ERROR: Faltan datos de la cita</strong>
      </div>
    <?php endif; ?>

    <?php Helpers::deleteSession('message_cita') ?>

    <div class="card-header">
      <h2 class="card-title">Registro de citas</h2>
    </div>

    <div class="card-body">

      <form action="<?php echo Parametros::BASE_URL ?>/cita/guardar" method="POST" >

        <div class="row">

          <div class="form-group mt-3 col-6" >
            <label class="form-label" for="nombre">Nombre completo:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required >

          </div>

          <div class="form-group mt-3 col-6">
            <label class="form-label" for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
          </div>

        </div>

        <div class="form-group mt-3">
          <label class="form-label" for="especialidad">Especialidad:</label>
          <select type="tel" class="form-control" id="especialidad" name="especialidad" required>
            <option value="">-- SELECCIONES UNA ESPECIALIDAD --</option>
            
            <?php foreach ( $lista_especialidades as $especialidad ) : ?>

              <option value="<?= $especialidad->getEspecialidad_id() ?>"> <?= $especialidad->getNombre_especialidad() ?> </option>

            <?php endforeach; ?>

          </select>
        </div>

        <div class="d-grid mt-3">
          <button type="submit" class="btn btn-primary btn-lg"> Agendar Cita </button>
        </div>

    </div>

  </article>


</section>