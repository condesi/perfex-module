<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_asistencia_uninstall {
    public function down()
    {
        // Código para eliminar tablas y datos
        $CI =& get_instance();
        $CI->load->dbforge();
        $CI->dbforge->drop_table('empleados', TRUE);
        // Eliminar otras tablas de manera similar...
    }
}
