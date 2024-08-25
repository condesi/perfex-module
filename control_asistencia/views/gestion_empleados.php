<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Gesti¨®n de Empleados</h1>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>DNI</th>
<th>Fecha de Nacimiento</th>
<th>Fecha de Ingreso</th>
<th>Fecha de Contrato</th>
<th>Sueldo</th>
<th>Vencimiento de Contrato</th>
<th>Registro de Seguros</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php foreach ($empleados as $empleado) { ?>
<tr>
<td><?php echo $empleado->id; ?></td>
<td><?php echo $empleado->dni; ?></td>
<td><?php echo $empleado->fecha_nacimiento; ?></td>
<td><?php echo $empleado->fecha_ingreso; ?></td>
<td><?php echo $empleado->fecha_contrato; ?></td>
<td><?php echo $empleado->sueldo; ?></td>
<td><?php echo $empleado->vencimiento_contrato; ?></td>
<td><?php echo $empleado->registro_seguros; ?></td>
<td>
<a href="<?php echo base_url('control_asistencia/editar_empleado/'.$empleado->id); ?>" class="btn btn-primary">Editar</a>
<a href="<?php echo base_url('control_asistencia/eliminar_empleado/'.$empleado->id); ?>" class="btn btn-danger">Eliminar</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
