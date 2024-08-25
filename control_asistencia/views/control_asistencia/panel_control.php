<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Panel de Control del Empleado</h1>
<ul class="nav nav-tabs">
<li class="active"><a href="#mi_perfil" data-toggle="tab">Mi Perfil</a></li>
<li><a href="#asistencias" data-toggle="tab">Asistencias</a></li>
<li><a href="#permisos" data-toggle="tab">Permisos</a></li>
<li><a href="#reportes" data-toggle="tab">Reportes</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="mi_perfil">
<!-- Código para la sección de perfil del empleado -->
<h2>Mi Perfil</h2>
<p>DNI: <?php echo $empleado->dni; ?></p>
<p>Nombre: <?php echo $empleado->nombre; ?></p>
<p>Apellido: <?php echo $empleado->apellido; ?></p>
<p>Correo electrónico: <?php echo $empleado->correo_electronico; ?></p>
</div>
<div class="tab-pane" id="asistencias">
<!-- Código para la sección de asistencias del empleado -->
<h2>Asistencias</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Fecha</th>
<th>Hora de Entrada</th>
<th>Hora de Salida</th>
<th>Horas Extras</th>
</tr>
</thead>
<tbody>
<?php foreach ($asistencias as $asistencia) { ?>
<tr>
<td><?php echo $asistencia->fecha; ?></td>
<td><?php echo $asistencia->hora_entrada; ?></td>
<td><?php echo $asistencia->hora_salida; ?></td>
<td><?php echo $asistencia->horas_extras; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<div class="tab-pane" id="permisos">
<!-- Código para la sección de permisos del empleado -->
<h2>Permisos</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Fecha</th>
<th>Tipo de Permiso</th>
<th>Hora de Inicio</th>
<th>Hora de Fin</th>
<th>Descripción</th>
</tr>
</thead>
<tbody>
<?php foreach ($permisos as $permiso) { ?>
<tr>
<td><?php echo $permiso->fecha; ?></td>
<td><?php echo $permiso->tipo_permiso; ?></td>
<td><?php echo $permiso->hora_inicio; ?></td>
<td><?php echo $permiso->hora_fin; ?></td>
<td><?php echo $permiso->descripcion; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<div class="tab-pane" id="reportes">
<!-- Código para la sección de reportes del empleado -->
<h2>Reportes</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Fecha</th>
<th>Reporte</th>
</tr>
</thead>
<tbody>
<?php foreach ($reportes as $reporte) { ?>
<tr>
<td><?php echo $reporte->fecha; ?></td>
<td><?php echo $reporte->reporte; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
