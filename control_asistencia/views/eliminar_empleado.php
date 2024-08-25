<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Eliminar Empleado</h1>
<p>¿Está seguro de eliminar al empleado <?php echo $empleado->dni; ?>?</p>
<form action="<?php echo base_url('control_asistencia/eliminar_empleado/'.$empleado->id); ?>" method="post">
<button type="submit" class="btn btn-danger">Eliminar</button>
</form>
</div>