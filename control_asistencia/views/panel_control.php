<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Panel de Control del Empleado</h1>
<ul class="nav nav-tabs">
<li class="active"><a href="#mi_perfil" data-toggle="tab">Mi Perfil</a></li>
<li><a href="#asistencias" data-toggle="tab">Asistencias</a></li>
<li><a href="#permisos" data-toggle="tab">Permisos</a></li>
<li><a href="#reportes" data-toggle="tab">Reportes</a></li>
<li><a href="#estadisticas" data-toggle="tab">Estadísticas</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="mi_perfil">
<!-- Código para la sección de perfil del empleado -->
<h2>Mi Perfil</h2>
<p>DNI: <?php echo $empleado->dni; ?></p>
<p>Fecha de Nacimiento: <?php echo $empleado->fecha_nacimiento; ?></p>
<p>Fecha de Ingreso: <?php echo $empleado->fecha_ingreso; ?></p>
<p>Fecha de Contrato: <?php echo $empleado->fecha_contrato; ?></p>
<p>Salario Base: <?php echo $empleado->sueldo; ?></p>
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
<th>Salario Base</th>
<th>Bono</th>
<th>Descuento</th>
<th>Total a Pagar</th>
</tr>
</thead>
<tbody>
<?php foreach ($sueldos as $sueldo) { ?>
<tr>
<td><?php echo $sueldo->fecha; ?></td>
<td><?php echo $sueldo->salario_base; ?></td>
<td><?php echo $sueldo->bono; ?></td>
<td><?php echo $sueldo->descuento; ?></td>
<td><?php echo $sueldo->total_a_pagar; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div> 
<div class="tab-pane" id="estadisticas">
<!-- Código para la sección de estadísticas del empleado -->
<h2>Estadísticas</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Nombre</th>
<th>Valor</th>
</tr>
</thead>
<tbody>
<tr>
<td>Número de Empleados</td>
<td><?php echo $estadisticas['num_empleados']; ?></td>
</tr>
<tr>
<td>Número de Asistencias</td>
<td><?php echo $estadisticas['num_asistencias']; ?></td>
</tr>
<tr>
<td>Número de Permisos</td>
<td><?php echo $estadisticas['num_permisos']; ?></td>
</tr>
<tr>
<td>Total de Horas Extras</td>
<td><?php echo $estadisticas['total_horas_extras']; ?></td>
</tr>
<tr>
<td>Total de Sueldos</td>
<td><?php echo $estadisticas['total_sueldos']; ?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</body>
</html>