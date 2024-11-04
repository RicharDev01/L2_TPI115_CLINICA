<?php

use App\Config\Parametros;
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="author" content="Mario Ricardo Pineda">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="shortcut icon" href="<?= Parametros::BASE_URL ?>/views/images/heart-pulse.svg" type="image/x-icon">
  <title> Laboratorio #2 | PP17043 </title>


  <!-- BOOTSTRAP AND ICONS -->
  <link rel="stylesheet" href="<?= Parametros::BASE_URL ?>/views/styles/bootstrap.min.css">
  <link rel="stylesheet" href="<?= Parametros::BASE_URL ?>/views/styles/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?= Parametros::BASE_URL ?>/views/styles/fonts/bootstrap-icons.woff">
  <link rel="stylesheet" href="<?= Parametros::BASE_URL ?>/views/styles/fonts/bootstrap-icons.woff2">

  <!-- CUSTOMS STYLE -->
  <link rel="stylesheet" href="<?= Parametros::BASE_URL ?>/views/styles/style.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark" >

    <section class="container-fluid">

      <a class="navbar-brand" href="#"> <i class="bi bi-heart-pulse"></i> </a>

      <!-- RESPONSIVE BUTTON -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Clinica</a>
          </li>
         
          <!-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>

        <section class="dropdown text-bg-primary mx-5 px-5">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-gear" ></i>
            <span> Usuario </span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
          </ul>
        </section>

      </div>

    </section>

  </nav>