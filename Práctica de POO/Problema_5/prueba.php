<?php

require_once 'Estudiante.php';

$e = new Estudiante('8-988-123', 3.5, 2023, Estudiante::ESTADO_ACTIVO, Estudiante::MODALIDAD_PRESENCIAL, 'Juan', 'Pérez', '2000-05-15');
echo $e->getNombre() . ' ' . $e->getApellido() . '<br>';
echo $e->getEstadoAcademicoTexto() . ' / ' . $e->getModalidadEstudioTexto();