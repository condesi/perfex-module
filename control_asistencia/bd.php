CREATE TABLE `empleados` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `dni` VARCHAR(20) NOT NULL,
    `fecha_nacimiento` DATE NOT NULL,
    `fecha_ingreso` DATE NOT NULL,
    `fecha_contrato` DATE NOT NULL,
    `sueldo` DECIMAL(10, 2) NOT NULL,
    `vencimiento_contrato` DATE NOT NULL,
    `registro_seguros` TEXT NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `asistencias` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `empleado_id` INT NOT NULL,
    `fecha` DATE NOT NULL,
    `hora_entrada` TIME NOT NULL,
    `hora_salida` TIME NOT NULL,
    `horas_extras` DECIMAL(5, 2) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`empleado_id`) REFERENCES `empleados`(`id`)
);

CREATE TABLE `refrigerios` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `empleado_id` INT NOT NULL,
    `fecha` DATE NOT NULL,
    `hora_inicio` TIME NOT NULL,
    `hora_fin` TIME NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`empleado_id`) REFERENCES `empleados`(`id`)
);

CREATE TABLE `permisos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `empleado_id` INT NOT NULL,
    `tipo_permiso` VARCHAR(50) NOT NULL,
    `hora_inicio` TIME NOT NULL,
    `hora_fin` TIME NOT NULL,
    `descripcion` TEXT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`empleado_id`) REFERENCES `empleados`(`id`)
);

CREATE TABLE `horas_extras` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `empleado_id` INT NOT NULL,
    `fecha` DATE NOT NULL,
    `horas_trabajadas` DECIMAL(5, 2) NOT NULL,
    `motivo` TEXT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`empleado_id`) REFERENCES `empleados`(`id`)
);

CREATE TABLE `sueldos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `empleado_id` INT NOT NULL,
    `salario_base` DECIMAL(10, 2) NOT NULL,
    `bono` DECIMAL(10, 2) NOT NULL,
    `descuento` DECIMAL(10, 2) NOT NULL,
    `total_a_pagar` DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`empleado_id`) REFERENCES `empleados`(`id`)
);

CREATE TABLE `pagos_horas_extras` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `empleado_id` INT NOT NULL,
    `horas_extras_trabajadas` DECIMAL(5, 2) NOT NULL,
    `tarifa_por_hora_extra` DECIMAL(10, 2) NOT NULL,
    `total_a_pagar` DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`empleado_id`) REFERENCES `empleados`(`id`)
);

CREATE TABLE `ajustes` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `horario_trabajo` VARCHAR(50) NOT NULL,
    `tarifa_hora_extra` DECIMAL(10, 2) NOT NULL,
    `dias_feriados` TEXT NOT NULL,
    PRIMARY KEY (`id`)
);