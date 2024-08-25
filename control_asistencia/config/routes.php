<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['control_asistencia'] = 'control_asistencia/index';
$route['control_asistencia/agregar_empleado'] = 'control_asistencia/agregar_empleado';
$route['control_asistencia/editar_empleado/(:num)'] = 'control_asistencia/editar_empleado/$1';
$route['control_asistencia/eliminar_empleado/(:num)'] = 'control_asistencia/eliminar_empleado/$1';
$route['control_asistencia/registrar_asistencia'] = 'control_asistencia/registrar_asistencia';
$route['control_asistencia/guardar_asistencia'] = 'control_asistencia/guardar_asistencia';
$route['control_asistencia/generar_reporte'] = 'control_asistencia/generar_reporte';
$route['control_asistencia/ajustes'] = 'control_asistencia/ajustes';
$route['control_asistencia/registrar_ingreso_salida'] = 'control_asistencia/registrar_ingreso_salida';
$route['control_asistencia/registrar_refrigerio'] = 'control_asistencia/registrar_refrigerio';
$route['control_asistencia/solicitar_permiso'] = 'control_asistencia/solicitar_permiso';
$route['control_asistencia/registrar_horas_extras'] = 'control_asistencia/registrar_horas_extras';
$route['control_asistencia/registrar_sueldo'] = 'control_asistencia/registrar_sueldo';
$route['control_asistencia/registrar_pago_horas_extras'] = 'control_asistencia/registrar_pago_horas_extras';
$route['control_asistencia/panel_control'] = 'control_asistencia/panel_control';
$route['control_asistencia/gestion_empleados'] = 'control_asistencia/gestion_empleados';
$route['control_asistencia/ajustes_sistema'] = 'control_asistencia/ajustes_sistema';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
