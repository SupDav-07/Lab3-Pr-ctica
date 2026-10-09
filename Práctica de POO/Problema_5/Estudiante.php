<?php

require_once 'Persona.php';

class Estudiante extends Persona
{
    // Estado académico
    public const ESTADO_INACTIVO = 0;
    public const ESTADO_ACTIVO   = 1;
    public const ESTADO_RETIRADO = 2;
    public const ESTADO_GRADUADO = 3;

    // Modalidad de estudio
    public const MODALIDAD_PRESENCIAL = 1;
    public const MODALIDAD_VIRTUAL    = 2;
    public const MODALIDAD_HIBRIDA    = 3;

    protected string $codigoEstudiante;
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(
        string $codigoEstudiante,
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoEstudiante = $codigoEstudiante;
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getCodigoEstudiante(): string
    {
        return $this->codigoEstudiante;
    }

    public function getIndiceAcademico(): float
    {
        return $this->indiceAcademico;
    }

    public function getCohorte(): int
    {
        return $this->cohorte;
    }

    public function getEstadoAcademico(): int
    {
        return $this->estadoAcademico;
    }

    public function getEstadoAcademicoTexto(): string
    {
        return match ($this->estadoAcademico) {
            self::ESTADO_INACTIVO => 'Inactivo',
            self::ESTADO_ACTIVO   => 'Activo',
            self::ESTADO_RETIRADO => 'Retirado',
            self::ESTADO_GRADUADO => 'Graduado',
            default               => 'Desconocido',
        };
    }

    public function getModalidadEstudio(): int
    {
        return $this->modalidadEstudio;
    }

    public function getModalidadEstudioTexto(): string
    {
        return match ($this->modalidadEstudio) {
            self::MODALIDAD_PRESENCIAL => 'Presencial',
            self::MODALIDAD_VIRTUAL    => 'Virtual',
            self::MODALIDAD_HIBRIDA    => 'Híbrida',
            default                    => 'Desconocida',
        };
    }
}