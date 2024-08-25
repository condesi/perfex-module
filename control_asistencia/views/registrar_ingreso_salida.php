<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Ingreso y Salida</title>
</head>
<body>
    <h1>Registrar Ingreso y Salida</h1>
    <form action="<?php echo admin_url('control_asistencia/registrar_ingreso_salida'); ?>" method="post">
        <label for="hora_ingreso">Hora de Ingreso:</label>
        <input type="time" name="hora_ingreso" id="hora_ingreso" required><br>
        <label for="hora_salida">Hora de Salida:</label>
        <input type="time" name="hora_salida" id="hora_salida" required><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
