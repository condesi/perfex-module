<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_tables extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        // Crear tabla de trabajadores
        if (!$this->db->table_exists('tbl_empleados')) {
            $fields = array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'nombre' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'apellido' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'dni' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                ),
                'direccion' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),
                'telefono' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'fecha_nacimiento' => array(
                    'type' => 'DATE',
                ),
                'cargo' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'activo' => array(
                    'type' => 'TINYINT',
                    'constraint' => 1,
                    'default' => 1,
                ),
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table('tbl_empleados', TRUE);
        }

        // Crear tabla de asistencia
        if (!$this->db->table_exists('tbl_asistencia')) {
            $fields = array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'trabajador_id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                ),
                'fecha' => array(
                    'type' => 'DATE',
                ),
                'hora_entrada' => array(
                    'type' => 'TIME',
                ),
                'hora_salida' => array(
                    'type' => 'TIME',
                ),
                'inicio_refrigerio' => array(
                    'type' => 'TIME',
                    'null' => TRUE,
                ),
                'fin_refrigerio' => array(
                    'type' => 'TIME',
                    'null' => TRUE,
                ),
                'horas_extras' => array(
                    'type' => 'FLOAT',
                    'null' => TRUE,
                ),
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (trabajador_id) REFERENCES tbl_empleados(id) ON DELETE CASCADE');
            $this->dbforge->create_table('tbl_asistencia', TRUE);
        }
    }

    public function down()
    {
        // Eliminar tablas si existen
        if ($this->db->table_exists('tbl_empleados')) {
            $this->dbforge->drop_table('tbl_empleados');
        }
        if ($this->db->table_exists('tbl_asistencia')) {
            $this->dbforge->drop_table('tbl_asistencia');
        }
    }
}