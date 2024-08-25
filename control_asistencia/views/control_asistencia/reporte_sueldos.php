<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
<h1>Reporte de Sueldos</h1>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Empleado</th>
<th>Salario Base</th>
<th>Bono</th>
<th>Descuento</th>
<th>Total a Pagar</th>
</tr>
</thead>
<tbody>
<?php foreach ($sueldos as $sueldo) { ?>
<tr>
<td><?php echo $sueldo->id; ?></td>
<td><?php echo $sueldo->empleado->dni; ?></td>
<td><?php echo $sueldo->salario_base; ?></td>
<td><?php echo $sueldo->bono; ?></td>
<td><?php echo $sueldo->descuento; ?></td>
<td><?php echo $sueldo->total_a_pagar; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>