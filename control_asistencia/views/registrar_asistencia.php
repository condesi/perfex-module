<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Registrar Asistencia</h1>
<form action="<?php echo base_url('control_asistencia/registrar_asistencia'); ?>" method="post">
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
<label for="hora_entrada">Hora de Entrada</label>
<input type="time" class="form-control" id="hora_entrada" name="hora_entrada" required>
</div>
<div class="form-group">
<label for="hora_salida">Hora de Salida</label>
<input type="time" class="form-control" id="hora_salida" name="hora_salida" required>
</div>
<div class="form-group">
<label for="horas_extras">Horas Extras</label>
<input type="number" class="form-control" id="horas_extras" name="horas_extras" required>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
