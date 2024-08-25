<?php

defined('BASEPATH') or exit('No direct script access allowed');

$config['module_name'] = 'Control de Asistencia';
$config['module_description'] = 'Módulo para controlar la asistencia de los empleados';
$config['module_author'] = 'Tu nombre';
$config['module_version'] = '1.0';

$config['permissions'] = array(
'view' => 'Ver asistencia',
'add' => 'Agregar asistencia',
'edit' => 'Editar asistencia',
'delete' => 'Eliminar asistencia'
);

?>