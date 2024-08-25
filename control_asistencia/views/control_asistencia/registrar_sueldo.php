<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Registrar Sueldo</h1>
<form action="<?php echo base_url('control_asistencia/registrar_sueldo'); ?>" method="post">
<div class="form-group">
<label for="empleado">Empleado</label>
<select class="form-control" id="empleado" name="empleado">
<?php foreach ($empleados as $empleado) { ?>
<option value="<?php echo $empleado->id; ?>"><?php echo $empleado->dni; ?></option>
<?php } ?>
</select>
</div>
<div class="form-group">
<label for="salario_base">Salario Base</label>
<input type="number" class="form-control" id="salario_base" name="salario_base" required>
</div>
<div class="form-group">
<label for="bono">Bono</label>
<input type="number" class="form-control" id="bono" name="bono" required>
</div>
<div class="form-group">
<label for="descuento">Descuento</label>
<input type="number" class="form-control" id="descuento" name="descuento" required>
</div>
<div class="form-group">
<label for="total_a_pagar">Total a Pagar</label>
<input type="number" class="form-control" id="total_a_pagar" name="total_a_pagar" required>
</div>
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>