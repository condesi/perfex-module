
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Agregar Empleado</h1>
<form action="<?php echo base_url('control_asistencia/agregar_empleado'); ?>" method="post">
<div class="form-group">
<label for="dni">DNI</label>
<input type="text" class="form-control" id="dni" name="dni" required>
</div>
<div class="form-group">
<label for="fecha_nacimiento">Fecha de Nacimiento</label>
<input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
</div>
<div class="form-group">
<label for="fecha_ingreso">Fecha de Ingreso</label>
<input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
</div>
<div class="form-group">
<label for="fecha_contrato">Fecha de Contrato</label>
<input type="date" class="form-control" id="fecha_contrato" name="fecha_contrato" required>
</div>
<div class="form-group">
<label for="sueldo">Sueldo</label>
<input type="number" class="form-control" id="sueldo" name="sueldo" required>
</div>
<div class="form-group">
<label for="vencimiento_contrato">Vencimiento de Contrato</label>
<input type="date" class="form-control" id="vencimiento_contrato" name="vencimiento_contrato" required>
</div>
<div class="form-group">
<label for="registro_seguros">Registro de Seguros</label>
<textarea class="form-control" id="registro_seguros" name="registro_seguros" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Agregar</button>
</form>
</div>
