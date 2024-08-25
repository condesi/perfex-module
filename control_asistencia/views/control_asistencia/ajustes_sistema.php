<h1>Ajustes del Sistema</h1>
<form action="<?php echo admin_url('control_asistencia/ajustes_sistema'); ?>" method="post">
    <label for="ajustes">Ajustes:</label>
    <textarea id="ajustes" name="ajustes"><?php echo $ajustes; ?></textarea>
    <br>
    <button type="submit">Guardar</button>
</form>
