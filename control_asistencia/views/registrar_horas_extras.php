<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Registrar Horas Extras</h1>
<form action="<?php echo base_url('control_asistencia/registrar_horas_extras'); ?>" method="post">
<div class="form-group">
<label for="empleado">Empleado</label>
<select class="form-control" id="empleado" name="empleado">
<?php foreach ($empleados as $empleado) { ?>
<option value="<?php echo $empleado->id; ?>"><?php echo $empleado->dni; ?></option>
<?php } ?>
</select>
</div>
<div class="form-group">
<label for="fecha">Fecha</label>
<input type="date" class="form-control" id="fecha" name="fecha" required>
</div>
<div class="form-group">
<label for="horas_trabajadas">Horas Trabajadas</label>
<input type="number" class="form-control" id="horas_trabajadas" name="horas_trabajadas" required>
</div>
<div class="form-group">
<label for="motivo">Motivo</label>
<textarea class="form-control" id="motivo" name="motivo" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>