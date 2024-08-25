<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Reporte de Refrigerios</h1>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Empleado</th>
<th>Fecha</th>
<th>Hora de Inicio</th>
<th>Hora de Fin</th>
</tr>
</thead>
<tbody>
<?php foreach ($refrigerios as $refrigerio) { ?>
<tr>
<td><?php echo $refrigerio->id; ?></td>
<td><?php echo $refrigerio->empleado->dni; ?></td>
<td><?php echo $refrigerio->fecha; ?></td>
<td><?php echo $refrigerio->hora_inicio; ?></td>
<td><?php echo $refrigerio->hora_fin; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
