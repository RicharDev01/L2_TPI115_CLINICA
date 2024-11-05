<section class="row">

<div class="col-2"></div>

<div class="col-8">

<table class="table table-striped table-hover">
  
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

  <?php foreach( $lista_pacientes as $paciente ): ?>
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

  </tbody>

</table>

</div>

<div class="col-2"></div>

</section>