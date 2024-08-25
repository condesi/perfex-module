<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Module Name: Control Asistencia
 * Description: Módulo para gestionar la asistencia de empleados.
 * Version: 1.0.0
 * Requires at least: 2.3.*
 */

hooks()->add_action('admin_init', 'control_asistencia_init_menu_items');

function control_asistencia_init_menu_items()
{
    $CI = &get_instance();
    $CI->app_menu->add_sidebar_menu_item('control_asistencia', [
        'name'     => 'Control Asistencia',
        'href'     => admin_url('control_asistencia'),
        'position' => 10,
        'icon'     => 'fa fa-clock-o',
    ]);
}
