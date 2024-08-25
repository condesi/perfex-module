<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_asistencia_model extends CI_Model {

    // Función para obtener todos los empleados
    public function get_all_empleados($filter = null) {
        try {
            if ($filter) {
                $this->db->like('nombre', $filter);
                $this->db->or_like('apellido', $filter);
                $this->db->or_like('departamento', $filter);
            }
            $this->db->order_by('id', 'asc');
            return $this->db->get('empleados')->result();
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return null;
        }
    }

    // Función para agregar un empleado
    public function agregar_empleado($data) {
        try {
            // Validar los datos
            if (empty($data['nombre']) || empty($data['apellido']) || empty($data['departamento'])) {
                throw new Exception('Debes ingresar todos los campos');
            }
            $this->db->insert('empleados', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
        }
    }

    // Función para obtener un empleado por ID
    public function get_empleado($id) {
        try {
            // Obtiene el ID del empleado actual de alguna manera
            return $this->db->where('id', $id)->get('empleados')->row();
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return null;
        }
    }

    // Función para editar un empleado
    public function editar_empleado($id, $data) {
        try {
            // Validar los datos
            if (empty($data['nombre']) || empty($data['apellido']) || empty($data['departamento'])) {
                throw new Exception('Debes ingresar todos los campos');
            }
            $this->db->where('id', $id)->update('empleados', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
        }
    }

    // Función para eliminar un empleado
    public function eliminar_empleado($id) {
        try {
            $this->db->where('id', $id)->delete('empleados');
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
        }
    }

    // Función para registrar un ingreso o salida
    public function registrar_ingreso_salida($data) {
        try {
            // Validar los datos
            if (empty($data['empleado_id']) || empty($data['fecha']) || empty($data['hora'])) {
                throw new Exception('Debes ingresar todos los campos');
            }
            $this->db->insert('asistencias', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
        }
    }

    // Función para registrar un refrigerio
    public function registrar_refrigerio($data) {
        try {
            // Validar los datos
            if (empty($data['empleado_id']) || empty($data['fecha']) || empty($data['hora'])) {
                throw new Exception('Debes ingresar todos los campos');
            }
            $this->db->insert('refrigerios', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
        }
    }

    // Función para solicitar un permiso
    public function solicitar_permiso($data) {
        try {
            // Validar los datos
            if (empty($data['empleado_id']) || empty($data['fecha']) || empty($data['motivo'])) {
                throw new Exception('Debes ingresar todos los campos');
            }
            $this->db->insert('permisos', $data);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
        }
    }
// Función para registrar horas extras
public function registrar_horas_extras($data) {
    try {
        // Validar los datos
        if (empty($data['empleado_id']) || empty($data['fecha']) || empty($data['horas'])) {
            throw new Exception('Debes ingresar todos los campos');
        }
        $this->db->insert('horas_extras', $data);
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
    }
}

// Función para registrar sueldo
public function registrar_sueldo($data) {
    try {
        // Validar los datos
        if (empty($data['empleado_id']) || empty($data['fecha']) || empty($data['sueldo'])) {
            throw new Exception('Debes ingresar todos los campos');
        }
        $this->db->insert('sueldos', $data);
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
    }
}

// Función para registrar pago de horas extras
public function registrar_pago_horas_extras($data) {
    try {
        // Validar los datos
        if (empty($data['empleado_id']) || empty($data['fecha']) || empty($data['pago'])) {
            throw new Exception('Debes ingresar todos los campos');
        }
        $this->db->insert('pagos_horas_extras', $data);
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
    }
}

// Función para generar un reporte de asistencia
public function generar_reporte_asistencia() {
    try {
        // Lógica para generar el reporte de asistencia
        $reporte = $this->db->get('asistencias')->result();
        return $reporte;
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
        return null;
    }
}

// Función para generar un reporte de refrigerios
public function generar_reporte_refrigerios() {
    try {
        // Lógica para generar el reporte de refrigerios
        $reporte = $this->db->get('refrigerios')->result();
        return $reporte;
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
        return null;
    }
}

// Función para generar un reporte de permisos
public function generar_reporte_permisos() {
    try {
        // Lógica para generar el reporte de permisos
        $reporte = $this->db->get('permisos')->result();
        return $reporte;
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
        return null;
    }
}

// Función para generar un reporte de horas extras
public function generar_reporte_horas_extras() {
    try {
        // Lógica para generar el reporte de horas extras
        $reporte = $this->db->get('horas_extras')->result();
        return $reporte;
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
        return null;
    }
}

// Función para generar un reporte de sueldos
public function generar_reporte_sueldos() {
    try {
        // Lógica para generar el reporte de sueldos
        $reporte = $this->db->get('sueldos')->result();
        return $reporte;
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
        return null;
    }
}

// Función para generar un reporte de pagos de horas extras
public function generar_reporte_pagos_horas_extras() {
    try {
        // Lógica para generar el reporte de pagos de horas extras
        $reporte = $this->db->get('pagos_horas_extras')->result();
        return $reporte;
    } catch (Exception $e) {
        log_message('error', $e->getMessage());
        return null;
    }
}

// Función para obtener todos los registros de asistencia
public function get_all_asistencias() {
    $query = $this->db->get('asistencias');
    return $query->result();
}
// Función para obtener estadísticas
public function get_estadisticas() {
    // Obtener el número de empleados
    $query = $this->db->get('empleados');
    $num_empleados = $query->num_rows();
    // Obtener el número de asistencias
$query = $this->db->get('asistencias');
$num_asistencias = $query->num_rows();

// Obtener el número de permisos
$query = $this->db->get('permisos');
$num_permisos = $query->num_rows();

// Obtener el número de horas extras trabajadas
$query = $this->db->select_sum('horas_trabajadas')->get('horas_extras');
$total_horas_extras = $query->row()->horas_trabajadas;

// Obtener el total de sueldos pagados
$query = $this->db->select_sum('total_a_pagar')->get('sueldos');
$total_sueldos = $query->row()->total_a_pagar;

// Obtener el total de pagos de horas extras
$query = $this->db->select_sum('total_a_pagar')->get('pagos_horas_extras');
$total_pagos_horas_extras = $query->row()->total_a_pagar;

// Crear un objeto con las estadísticas
$estadisticas = array(
'num_empleados' => $num_empleados,
'num_asistencias' => $num_asistencias,
'num_permisos' => $num_permisos,
'total_horas_extras' => $total_horas_extras,
'total_sueldos' => $total_sueldos,
'total_pagos_horas_extras' => $total_pagos_horas_extras
);

return $estadisticas;
}

// Función para obtener ajustes
public function get_ajustes() {
try {
// Obtener los ajustes de la base de datos
$query = $this->db->get('ajustes');
return $query->row();
} catch (Exception $e) {
log_message('error', $e->getMessage());
return null;
}
}

}
