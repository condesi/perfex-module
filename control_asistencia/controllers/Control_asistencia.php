<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_asistencia extends AdminController {

    public function __construct() {
        parent::__construct();
        $this->load->model('Control_asistencia_model');
        // Verificar si el usuario está autenticado en Perfex
    }

    public function is_logged_in() {
        // Verificar si el usuario está autenticado en Perfex
        $this->load->library('session');
        $usuario = $this->session->userdata('usuario');
        if (empty($usuario) || !isset($usuario['id'])) {
            return false;
        } else {
            return true;
        }
    }

    public function index() {
        $data['empleados'] = $this->Control_asistencia_model->get_all_empleados();
        $this->load->view('control_asistencia/listar_asistencias', $data);
    }

    public function agregar_empleado() {
        if ($this->input->post()) {
            $data = $this->input->post();
            // Validar y sanitizar los datos
            $data['nombre'] = $this->input->post('nombre', true);
            $data['apellido'] = $this->input->post('apellido', true);
            // ...
            $this->Control_asistencia_model->agregar_empleado($data);
            redirect(admin_url('control_asistencia'));
        }
        $this->load->view('control_asistencia/agregar_empleado');
    }

    public function editar_empleado($id) {
        if ($this->input->post()) {
            $data = $this->input->post();
            // Validar y sanitizar los datos
            $data['nombre'] = $this->input->post('nombre', true);
            $data['apellido'] = $this->input->post('apellido', true);
            // ...
            $this->Control_asistencia_model->editar_empleado($id, $data);
            redirect(admin_url('control_asistencia'));
        }
        $data['empleado'] = $this->Control_asistencia_model->get_empleado($id);
        $this->load->view('control_asistencia/editar_empleado', $data);
    }

    public function eliminar_empleado($id) {
        $this->Control_asistencia_model->eliminar_empleado($id);
        redirect(admin_url('control_asistencia'));
    }

    public function registrar_ingreso_salida() {
        if ($this->input->post()) {
            $data = $this->input->post();
            // Validar y sanitizar los datos
            $data['hora_ingreso'] = $this->input->post('hora_ingreso', true);
            $data['hora_salida'] = $this->input->post('hora_salida', true);
            // ...
            $this->Control_asistencia_model->registrar_ingreso_salida($data);
            redirect(admin_url('control_asistencia'));
        }
        $this->load->view('control_asistencia/registrar_ingreso_salida');
    }

    public function registrar_refrigerio() {
        if ($this->input->post()) {
            $data = $this->input->post();
            // Validar y sanitizar los datos
            $data['hora_refrigerio'] = $this->input->post('hora_refrigerio', true);
            // ...
            $this->Control_asistencia_model->registrar_refrigerio($data);
            redirect(admin_url('control_asistencia'));
        }
        $this->load->view('control_asistencia/registrar_refrigerio');
    }

    public function solicitar_permiso() {
        if ($this->input->post()) {
            $data = $this->input->post();
            // Validar y sanitizar los datos
            $data['fecha_permiso'] = $this->input->post('fecha_permiso', true);
            // ...
            $this->Control_asistencia_model->solicitar_permiso($data);
            redirect(admin_url('control_asistencia'));
        }
        $this->load->view('control_asistencia/solicitar_permiso');
    }

    public function registrar_horas_extras() {
        if ($this->input->post()) {
            $data = $this->input->post();
            // Validar y sanitizar los datos
            $data['hora_extras'] = $this->input->post('hora_extras', true);
            // ...
            $this->Control_asistencia_model->registrar_horas_extras($data);
            redirect(admin_url('control_asistencia'));
        }
        $this->load->view('control_asistencia/registrar_horas_extras');
    }

public function registrar_sueldo() {
    if ($this->input->post()) {
        $data = $this->input->post();
        // Validar y sanitizar los datos
        $data['sueldo'] = $this->input->post('sueldo', true);
        // ...
        $this->Control_asistencia_model->registrar_sueldo($data);
        redirect(admin_url('control_asistencia'));
    }
    $this->load->view('control_asistencia/registrar_sueldo');
}

public function registrar_pago_horas_extras() {
    if ($this->input->post()) {
        $data = $this->input->post();
        // Validar y sanitizar los datos
        $data['pago_horas_extras'] = $this->input->post('pago_horas_extras', true);
        // ...
        $this->Control_asistencia_model->registrar_pago_horas_extras($data);
        redirect(admin_url('control_asistencia'));
    }
    $this->load->view('control_asistencia/registrar_pago_horas_extras');
}

public function generar_reporte() {
    $data['reporte'] = $this->Control_asistencia_model->generar_reporte();
    $this->load->view('control_asistencia/reporte_asistencia', $data);
}

public function generar_reporte_general() {
    $data['reporte_general'] = $this->Control_asistencia_model->generar_reporte_general();
    $this->load->view('control_asistencia/reporte_general', $data);
}

public function generar_reporte_individual($empleado_id) {
    $data['reporte_individual'] = $this->Control_asistencia_model->generar_reporte_individual($empleado_id);
    $this->load->view('control_asistencia/reporte_individual', $data);
}

public function gestion_empleados() {
    $data['empleados'] = $this->Control_asistencia_model->get_all_empleados();
    $this->load->view('control_asistencia/gestion_empleados', $data);
}

public function ajustes_sistema() {
    if ($this->input->post()) {
        $data = $this->input->post();
        // Validar y sanitizar los datos
        $data['ajustes'] = $this->input->post('ajustes', true);
        // ...
        $this->Control_asistencia_model->guardar_ajustes($data);
        redirect(admin_url('control_asistencia/ajustes_sistema'));
    }
    $data['ajustes'] = $this->Control_asistencia_model->get_ajustes();
    $this->load->view('control_asistencia/ajustes_sistema', $data);
}

public function panel_control() {
    // Obtener los ajustes de la sistema
    $data['ajustes'] = $this->Control_asistencia_model->get_ajustes();
    // Obtener el empleado actual
    $data['empleado'] = $this->Control_asistencia_model->get_empleado($this->session->userdata('empleado_id'));
    // Obtener las estadísticas de la sistema
    $data['estadisticas'] = $this->Control_asistencia_model->get_estadisticas();
    // Cargar la vista del panel de control
    $this->load->view('control_asistencia/panel_control', $data);
}

public function listar_asistencias() {
    $data['asistencias'] = $this->Control_asistencia_model->get_all_asistencias();
    $this->load->view('control_asistencia/listar_asistencias', $data);
}

} 