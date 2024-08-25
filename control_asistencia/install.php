<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_asistencia_install {
    public function up()
    {
        // Código para crear tablas y datos iniciales
        $CI =& get_instance();
        $CI->load->dbforge();

        // Crear tablas
        $CI->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'dni' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'fecha_nacimiento' => array(
                'type' => 'DATE',
            ),
            'fecha_ingreso' => array(
                'type' => 'DATE',
            ),
            'fecha_contrato' => array(
                'type' => 'DATE',
            ),
            'sueldo' => array(
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ),
            'vencimiento_contrato' => array(
                'type' => 'DATE',
            ),
            'registro_seguros' => array(
                'type' => 'TEXT',
            ),
        ));
        $CI->dbforge->add_key('id', TRUE);
        $CI->dbforge->create_table('empleados');

        // Crear otras tablas de manera similar...
    }

    public function down()
    {
        // Código para eliminar tablas y datos
        $CI =& get_instance();
        $CI->load->dbforge();
        $CI->dbforge->drop_table('empleados', TRUE);
        // Eliminar otras tablas de manera similar...
    }
}
