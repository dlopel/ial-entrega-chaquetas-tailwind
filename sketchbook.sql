SELECT
    `id`,
    `user_id`,
    `nombres`,
    `apellidos`,
    `dni`,
    `celular`,
    `whatsapp`,
    `email`,
    `fecha_nacimiento`,
    `proviene_id`,
    `provincia`,
    `provincia_id`,
    `distrito_id`,
    `direccion`,
    `modalidad_id`,
    `carrera_id`,
    `fuente_id`,
    `enterado_id`,
    `ciclo_id`,
    `estado_id`,
    `estado_detalle_id`,
    `reasignado`,
    `codigo_reingreso`,
    `semestre_termino_id`,
    `ciclo_termino_id`,
    `semestre_inicio_id`,
    `ciclo_inicio_id`,
    `mes`,
    `cursos_jalados`,
    `turno_id`,
    `horario_id`,
    `sede_id`,
    `presencial_sede_id`,
    `presencial_turno_id`,
    `presencial_horario_id`,
    `tipo_operacion_id`,
    `nro_operacion`,
    `monto`,
    `nombre_titular`,
    `codigo_alumno`,
    `promocion`,
    `observacion`,
    `ultimo_contacto`,
    `created_at`,
    `updated_at`,
    `deleted_at`
FROM
    `clientes`
WHERE
    `estado_id` = 4
    AND `carrera_id` = 1


SELECT
    `codigo_alumno`,
    `nombres`,
    `apellidos`,
    `dni`,
FROM
    `clientes`
WHERE
    `estado_id` = 4
    AND `carrera_id` = 1
     -- Aqui viene la exportación
    INTO OUTFILE '/tmp/alumenfer.csv' FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '\"' LINES TERMINATED BY '\r\n';