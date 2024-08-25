<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="container">
    <h1>Asistencias</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
                <th>Horas Extras</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($asistencias) && !empty($asistencias)) { ?>
                <?php foreach ($asistencias as $asistencia) { ?>
                    <tr>
                        <td><?php echo $asistencia->id; ?></td>
                        <td><?php echo $asistencia->empleado->dni; ?></td>
                        <td><?php echo $asistencia->fecha; ?></td>
                        <td><?php echo $asistencia->hora_entrada; ?></td>
                        <td><?php echo $asistencia->hora_salida; ?></td>
                        <td><?php echo $asistencia->horas_extras; ?></td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <p>No hay asistencias registradas.</p>
            <?php } ?>
        </tbody>
    </table>
</div>
