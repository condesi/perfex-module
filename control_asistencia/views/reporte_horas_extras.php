<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Reporte de Horas Extras</h1>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Empleado</th>
<th>Fecha</th>
<th>Horas Trabajadas</th>
<th>Motivo</th>
</tr>
</thead>
<tbody>
<?php foreach ($horas_extras as $hora_extra) { ?>
<tr>
<td><?php echo $hora_extra->id; ?></td>
<td><?php echo $hora_extra->empleado->dni; ?></td>
<td><?php echo $hora_extra->fecha; ?></td>
<td><?php echo $hora_extra->horas_trabajadas; ?></td>
<td><?php echo $hora_extra->motivo; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
