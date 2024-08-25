<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Pago por Horas Extras</title>
</head>
<body>
    <h1>Registrar Pago por Horas Extras</h1>
    <form action="<?php echo admin_url('control_asistencia/registrar_pago_horas_extras'); ?>" method="post">
        <label for="horas_extras_trabajadas">Horas Extras Trabajadas:</label>
        <input type="number" name="horas_extras_trabajadas" id="horas_extras_trabajadas" required><br>
        <label for="tarifa_por_hora_extra">Tarifa por Hora Extra:</label>
        <input type="number" name="tarifa_por_hora_extra" id="tarifa_por_hora_extra" required><br>
        <label for="total_a_pagar">Total a Pagar:</label>
        <input type="number" name="total_a_pagar" id="total_a_pagar" required><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
