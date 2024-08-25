<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Generar Reporte</h1>
<form action="<?php echo base_url('control_asistencia/generar_reporte'); ?>" method="post">
<div class="form-group">
<label for="fecha_inicio">Fecha Inicio</label>
<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
</div>
<div class="form-group">
<label for="fecha_fin">Fecha Fin</label>
<input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
</div>
<button type="submit" class="btn btn-primary">Generar</button>
</form>
</div>