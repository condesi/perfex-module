<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_admin()
{
    $CI = &get_instance();
    return $CI->session->userdata('is_admin');
}

function has_permission($module, $feature, $action)
{
    $CI = &get_instance();
    // Implementa la lógica para verificar permisos
    return true;
}
