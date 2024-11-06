<section class="row m-3 g-3">
<?php echo '<pre>'; 
var_dump( $citas_programadas ); 
echo '</pre>'; exit; ?>

<?php foreach ( $citas_programadas as $cita ) : ?> 

  <div class="col-4">

    <article class="card">

      <div class="card-header d-flex align-items-center justify-content-between">
        <h2> <?= $cita->getPaciente()->getNombre1() ." ". $cita->getPaciente()->getApellido1() ?> </h2>
        <span class="badge text-bg-info ">PROGRAMADA</span>
      </div>

      <div class="card-body">

        <div class="row">
          <div class="col-6">
            <p> <i class="bi bi-calendar-day"></i> Fecha: <strong>06/11/2024</strong> </p>
          </div>
          <div class="col-6">
            <p> <i class="bi bi-clock "></i> Hora: <strong>10:00 am</strong></p>
          </div>
        </div>

        <hr>
        <p> <i class="bi bi-clipboard2-pulse"></i> Medico Asignado: <strong>Dr(a). Diego Melendez Diaz</strong> </p>
      </div>

      <div class="card-footer">
        <a href="#" class="btn btn-outline-danger">Cancelar cita</a>
      </div>

    </article>
    
  </div>

<?php endforeach; ?>

</section>