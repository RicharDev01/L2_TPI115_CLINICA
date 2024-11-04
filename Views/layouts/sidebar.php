<?php

use App\Config\Parametros;
?>
<aside class="sidebar bg-dark col-3">
  <nav class="list-group mt-5">

    <!-- DASHBOARD -->
    <a 
      href="<?= Parametros::BASE_URL ?>" 
      class="list-group-item list-group-item-action d-flex justify-content-between text-bg-dark">
      <span> <i class="mx-2 bi bi-grid"></i> Dashboard </span>
    </a>

    <!-- PACIENTES -->
    <a href="#paciente" class="list-group-item list-group-item-action d-flex justify-content-between text-bg-dark"
      data-bs-toggle="collapse">
      <span> <i class="mx-2 bi bi-people"></i> Registro de pacientes </span>
      <i class="mx-2 bi bi-chevron-down"></i>
    </a>
    <div class="collapse" id="paciente">
      <a href="<?= Parametros::BASE_URL ?>/paciente/registrar"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-person-plus"></i> Registrar
      </a>
      <a href="<?= Parametros::BASE_URL ?>/paciente/listar"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-person-lines-fill"></i> Lista de pacientes
      </a>
    </div>

    <!-- MEDICOS -->
    <a href="#medico" class="list-group-item list-group-item-action d-flex justify-content-between text-bg-dark"
      data-bs-toggle="collapse">
      <span> <i class="mx-2 bi bi-hospital"></i> Medicos </span>
      <i class="mx-2 bi bi-chevron-down"></i>
    </a>
    <div class="collapse" id="medico">
      <a href="<?= Parametros::BASE_URL ?>/medico/registrar"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-person-plus"></i> Registrar
      </a>
      <a href="<?= Parametros::BASE_URL ?>/medico/listar"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-journal-medical"></i> Lista de medicos
      </a>
    </div>

    <!-- CITAS -->
    <a href="#citas" class="list-group-item list-group-item-action d-flex justify-content-between text-bg-dark"
      data-bs-toggle="collapse">
      <span> <i class="mx-2 bi bi-calendar-day"></i> Citas </span>
      <i class="mx-2 bi bi-chevron-down"></i>
    </a>
    <div class="collapse" id="citas">
      <a href="<?= Parametros::BASE_URL ?>/cita/programadas"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-calendar-week"></i>Citas Programadas
      </a>
      <a href="<?= Parametros::BASE_URL ?>/cita/canceladas"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-calendar-x"></i> Citas Canceladas
      </a>
      <a href="<?= Parametros::BASE_URL ?>/cita/completadas"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-calendar2-check"></i> Citas Completadas
      </a>
    </div>

    <!-- Especialidades -->
    <a href="#especialidades" class="list-group-item list-group-item-action d-flex justify-content-between text-bg-dark"
      data-bs-toggle="collapse">
      <span> <i class="mx-2 bi bi-capsule"></i> Especialidades </span>
      <i class="mx-2 bi bi-chevron-down"></i>
    </a>
    <div class="collapse" id="especialidades">
      <a href="<?= Parametros::BASE_URL ?>/especialidad/crear"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-plus-circle"></i>Crear Especialidad
      </a>
      <a href="<?= Parametros::BASE_URL ?>/especialidad/ver"
        class="px-5 text-bg-dark list-group-item list-group-item-action">
        <i class="mx-2 bi bi-folder2-open"></i> Ver Especialidades
      </a>
    </div>
  </nav>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const currentUrl = window.location.href;
      const menuItems = document.querySelectorAll('.list-group-item');

      menuItems.forEach(item => {
        if (item.href && currentUrl.includes(item.href)) {
          item.classList.add('active');
          const collapseMenu = item.closest('.collapse');
          if (collapseMenu) {
            collapseMenu.classList.add('show');
          }
        }
      });
    });
  </script>

  <footer class="border-top py-2 d-flex justify-content-center align-items-center text-light">

    <p class="m-0 ">Laboratorio TPI115 #2 &copy; Ricardo Pineda <?= date('Y') ?></p>
  </footer>
</aside>