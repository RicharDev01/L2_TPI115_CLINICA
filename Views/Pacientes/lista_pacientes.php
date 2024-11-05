<?php

use App\Config\Parametros;

?>

<section class="d-flex justify-content-center align-items-center h-100 flex-nowrap">


  <article class="card w-75">

    <div class="card-header">
      <h2>Lista de especialidades</h2>
    </div>

    <div class="card-body">
      <table class="table table-striped table-hover text-center">

        <thead>
          <tr>
            <th>ID</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo Apellido</th>
            <th>Fecha Nac</th>
            <th>DUI</th>
            <th>Telefono</th>
          </tr>
        </thead>

        <tbody>

          <!-- Modal de Confirmación -->
          <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="confirmModalLabel">Confirmación</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ¿Estás seguro de que deseas realizar esta acción?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <a href="#" id="confirmButton" class="btn btn-danger">Confirmar</a>
                </div>
              </div>
            </div>
          </div>

          <?php foreach ($lista_pacientes as $paciente): ?>
            <tr>
              <td> <?= $paciente->getIdPaciente() ?> </td>
              <td> <?= $paciente->getNombre1() ?> </td>
              <td> <?= $paciente->getNombre2() ?> </td>
              <td> <?= $paciente->getApellido1() ?> </td>
              <td> <?= $paciente->getApellido2() ?> </td>
              <td> <?= $paciente->getFecha_nac() ?> </td>
              <td> <?= $paciente->getDui() ?> </td>
              <td> <?= $paciente->getTelefono() ?> </td>
            </tr>
          <?php endforeach; ?>

          <!-- PARA EL MODAL -->
          <script>
            function confirmAction(url) {
              const confirmButton = document.getElementById('confirmButton');
              confirmButton.href = url;
              const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
              confirmModal.show();
            }
          </script>


        </tbody>

      </table>

    </div>

    <!-- TODO: si queda chance agregare paginacion  -->
    <div class="card-footer d-flex justify-content-between">
      <p>Pag. 1 </p> <span>1 - 10 de 20</span>
    </div>

  </article>


</section>