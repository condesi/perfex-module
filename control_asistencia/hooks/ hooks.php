<?php
defined('BASEPATH') or exit('No direct script access allowed');

hooks()->add_action('before_insert', 'Control_asistencia_hook::before_insert');
hooks()->add_action('after_insert', 'Control_asistencia_hook::after_insert');
