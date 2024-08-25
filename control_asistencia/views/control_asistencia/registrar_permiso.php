<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Registrar Permiso</h1>
<form action="<?php echo base_url('control_asistencia/registrar_permiso'); ?>" method="post">
<div class="form-group">
<label for="empleado">Empleado</label>
<select class="form-control" id="empleado" name="empleado">
<?php foreach ($empleados as $empleado) { ?>
<option value="<?php echo $empleado->id; ?>"><?php echo $empleado->dni; ?></option>
<?php } ?>
</select>
</div>
<div class="form-group">
<label for="tipo_permiso">Tipo de Permiso</label>
<select class="form-control" id="tipo_permiso" name="tipo_permiso">
<option value="Hoy">Hoy</option>
<option value="Mañana">Mañana</option>
<option value="Día completo">Día completo</option>
</select>
</div>
<div class="form-group">
<label for="hora_inicio">Hora de Inicio</label>
<input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
</div>
<div class="form-group">
<label for="hora_fin">Hora de Fin</label>
<input type="time" class="form-control" id="hora_fin" name="hora_fin" required>
</div>
<div class="form-group">
<label for="descripcion">Descripción</label>
<textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
