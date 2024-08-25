<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Reporte de Permisos</h1>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Empleado</th>
<th>Tipo de Permiso</th>
<th>Hora de Inicio</th>
<th>Hora de Fin</th>
<th>Descripción</th>
</tr>
</thead>
<tbody>
<?php foreach ($permisos as $permiso) { ?>
<tr>
<td><?php echo $permiso->id; ?></td>
<td><?php echo $permiso->empleado->dni; ?></td>
<td><?php echo $permiso->tipo_permiso; ?></td>
<td><?php echo $permiso->hora_inicio; ?></td>
<td><?php echo $permiso->hora_fin; ?></td>
<td><?php echo $permiso->descripcion; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
