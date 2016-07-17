<?php

namespace ContratosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabajo
 */
class Trabajo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $empleador_persona;

    /**
     * @var string
     */
    private $empleador_natural_sexo = 'Hombre';

    /**
     * @var string
     */
    private $empleador_natural_nombres;

    /**
     * @var string
     */
    private $empleador_natural_apellido_paterno;

    /**
     * @var string
     */
    private $empleador_natural_apellido_materno;

    /**
     * @var string
     */
    private $empleador_natural_nacionalidad;

    /**
     * @var string
     */
    private $empleador_natural_estado_civil;

    /**
     * @var string
     */
    private $empleador_natural_profesion;

    /**
     * @var string
     */
    private $empleador_natural_rut;

    /**
     * @var string
     */
    private $empleador_natural_domicilio;

    /**
     * @var string
     */
    private $empleador_natural_region;

    /**
     * @var string
     */
    private $empleador_juridica_razon;

    /**
     * @var string
     */
    private $empleador_juridica_giro;

    /**
     * @var string
     */
    private $empleador_juridica_rut;

    /**
     * @var string
     */
    private $empleador_juridica_domicilio;

    /**
     * @var string
     */
    private $empleador_juridica_region;

    /**
     * @var \DateTime
     */
    private $empleador_juridica_personeria_fecha;

    /**
     * @var string
     */
    private $empleador_juridica_personeria_notaria;

    /**
     * @var string
     */
    private $empleador_juridica_personeria_lugar;

    /**
     * @var string
     */
    private $trabajador_sexo = 'Hombre';

    /**
     * @var string
     */
    private $trabajador_nombres;

    /**
     * @var string
     */
    private $trabajador_apellido_paterno;

    /**
     * @var string
     */
    private $trabajador_apellido_materno;

    /**
     * @var boolean
     */
    private $trabajador_extranjero = false;

    /**
     * @var string
     */
    private $trabajador_nacionalidad;

    /**
     * @var string
     */
    private $trabajador_procedencia;

    /**
     * @var string
     */
    private $trabajador_visa;

    /**
     * @var string
     */
    private $trabajador_estado_civil;

    /**
     * @var string
     */
    private $trabajador_profesion;

    /**
     * @var string
     */
    private $trabajador_rut;

    /**
     * @var \DateTime
     */
    private $trabajador_nacimiento;

    /**
     * @var string
     */
    private $trabajador_domicilio;

    /**
     * @var string
     */
    private $trabajador_region;

    /**
     * @var string
     */
    private $actividad_empresa;

    /**
     * @var string
     */
    private $actividad_empleado_funciones;

    /**
     * @var string
     */
    private $actividad_empleado_responsabilidades;

    /**
     * @var string
     */
    private $lugar_trabajo;

    /**
     * @var string
     */
    private $lugar_direccion;

    /**
     * @var string
     */
    private $lugar_ciudad;

    /**
     * @var string
     */
    private $lugar_otro;

    /**
     * @var string
     */
    private $duracion_jornada_tipo;

    /**
     * @var integer
     */
    private $duracion_jornada_cantidad_completa;

    /**
     * @var integer
     */
    private $duracion_jornada_cantidad_parcial;

    /**
     * @var string
     */
    private $duracion_jornada_colacion;

    /**
     * @var boolean
     */
    private $duracion_jornada_alternativa = false;

    /**
     * @var string
     */
    private $sueldo_monto;

    /**
     * @var string
     */
    private $sueldo_unidad;

    /**
     * @var string
     */
    private $sueldo_frecuencia;

    /**
     * @var string
     */
    private $sueldo_periodo;

    /**
     * @var string
     */
    private $sueldo_afp;

    /**
     * @var string
     */
    private $sueldo_salud;

    /**
     * @var boolean
     */
    private $sueldo_otra_remuneracion = false;

    /**
     * @var boolean
     */
    private $sueldo_otra_remuneracion_comision = false;

    /**
     * @var string
     */
    private $sueldo_otra_remuneracion_comision_texto;

    /**
     * @var boolean
     */
    private $sueldo_otra_remuneracion_participacion = false;

    /**
     * @var string
     */
    private $sueldo_otra_remuneracion_participacion_texto;

    /**
     * @var boolean
     */
    private $sueldo_otra_remuneracion_otro = false;

    /**
     * @var string
     */
    private $sueldo_otra_remuneracion_otro_texto;

    /**
     * @var boolean
     */
    private $sueldo_otra_beneficios = false;

    /**
     * @var string
     */
    private $sueldo_otra_beneficios_descripcion;

    /**
     * @var string
     */
    private $duracion_contrato_tipo;

    /**
     * @var integer
     */
    private $duracion_contrato_cantidad;

    /**
     * @var string
     */
    private $duracion_contrato_unidad;

    /**
     * @var string
     */
    private $duracion_contrato_obra;

    /**
     * @var string
     */
    private $duracion_contrato_periodo;

    /**
     * @var \DateTime
     */
    private $duracion_contrato_fecha;

    /**
     * @var \DateTime
     */
    private $prestacion_fecha;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $empleador_natural_comuna;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $empleador_juridica_comuna;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $trabajador_comuna;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $jurisdiccion_comuna;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $trabajo_oficial_jornadas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $trabajo_alternativa_jornadas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $empleador_juridica_representantes;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trabajo_oficial_jornadas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->trabajo_alternativa_jornadas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->empleador_juridica_representantes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Trabajo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Trabajo
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set empleador_persona
     *
     * @param string $empleadorPersona
     * @return Trabajo
     */
    public function setEmpleadorPersona($empleadorPersona)
    {
        $this->empleador_persona = $empleadorPersona;

        return $this;
    }

    /**
     * Get empleador_persona
     *
     * @return string 
     */
    public function getEmpleadorPersona()
    {
        return $this->empleador_persona;
    }

    /**
     * Set empleador_natural_sexo
     *
     * @param string $empleadorNaturalSexo
     * @return Trabajo
     */
    public function setEmpleadorNaturalSexo($empleadorNaturalSexo)
    {
        $this->empleador_natural_sexo = $empleadorNaturalSexo;

        return $this;
    }

    /**
     * Get empleador_natural_sexo
     *
     * @return string 
     */
    public function getEmpleadorNaturalSexo()
    {
        return $this->empleador_natural_sexo;
    }

    /**
     * Set empleador_natural_nombres
     *
     * @param string $empleadorNaturalNombres
     * @return Trabajo
     */
    public function setEmpleadorNaturalNombres($empleadorNaturalNombres)
    {
        $this->empleador_natural_nombres = $empleadorNaturalNombres;

        return $this;
    }

    /**
     * Get empleador_natural_nombres
     *
     * @return string 
     */
    public function getEmpleadorNaturalNombres()
    {
        return $this->empleador_natural_nombres;
    }

    /**
     * Set empleador_natural_apellido_paterno
     *
     * @param string $empleadorNaturalApellidoPaterno
     * @return Trabajo
     */
    public function setEmpleadorNaturalApellidoPaterno($empleadorNaturalApellidoPaterno)
    {
        $this->empleador_natural_apellido_paterno = $empleadorNaturalApellidoPaterno;

        return $this;
    }

    /**
     * Get empleador_natural_apellido_paterno
     *
     * @return string 
     */
    public function getEmpleadorNaturalApellidoPaterno()
    {
        return $this->empleador_natural_apellido_paterno;
    }

    /**
     * Set empleador_natural_apellido_materno
     *
     * @param string $empleadorNaturalApellidoMaterno
     * @return Trabajo
     */
    public function setEmpleadorNaturalApellidoMaterno($empleadorNaturalApellidoMaterno)
    {
        $this->empleador_natural_apellido_materno = $empleadorNaturalApellidoMaterno;

        return $this;
    }

    /**
     * Get empleador_natural_apellido_materno
     *
     * @return string 
     */
    public function getEmpleadorNaturalApellidoMaterno()
    {
        return $this->empleador_natural_apellido_materno;
    }

    /**
     * Set empleador_natural_nacionalidad
     *
     * @param string $empleadorNaturalNacionalidad
     * @return Trabajo
     */
    public function setEmpleadorNaturalNacionalidad($empleadorNaturalNacionalidad)
    {
        $this->empleador_natural_nacionalidad = $empleadorNaturalNacionalidad;

        return $this;
    }

    /**
     * Get empleador_natural_nacionalidad
     *
     * @return string 
     */
    public function getEmpleadorNaturalNacionalidad()
    {
        return $this->empleador_natural_nacionalidad;
    }

    /**
     * Set empleador_natural_estado_civil
     *
     * @param string $empleadorNaturalEstadoCivil
     * @return Trabajo
     */
    public function setEmpleadorNaturalEstadoCivil($empleadorNaturalEstadoCivil)
    {
        $this->empleador_natural_estado_civil = $empleadorNaturalEstadoCivil;

        return $this;
    }

    /**
     * Get empleador_natural_estado_civil
     *
     * @return string 
     */
    public function getEmpleadorNaturalEstadoCivil()
    {
        return $this->empleador_natural_estado_civil;
    }

    /**
     * Set empleador_natural_profesion
     *
     * @param string $empleadorNaturalProfesion
     * @return Trabajo
     */
    public function setEmpleadorNaturalProfesion($empleadorNaturalProfesion)
    {
        $this->empleador_natural_profesion = $empleadorNaturalProfesion;

        return $this;
    }

    /**
     * Get empleador_natural_profesion
     *
     * @return string 
     */
    public function getEmpleadorNaturalProfesion()
    {
        return $this->empleador_natural_profesion;
    }

    /**
     * Set empleador_natural_rut
     *
     * @param string $empleadorNaturalRut
     * @return Trabajo
     */
    public function setEmpleadorNaturalRut($empleadorNaturalRut)
    {
        $this->empleador_natural_rut = $empleadorNaturalRut;

        return $this;
    }

    /**
     * Get empleador_natural_rut
     *
     * @return string 
     */
    public function getEmpleadorNaturalRut()
    {
        return $this->empleador_natural_rut;
    }

    /**
     * Set empleador_natural_domicilio
     *
     * @param string $empleadorNaturalDomicilio
     * @return Trabajo
     */
    public function setEmpleadorNaturalDomicilio($empleadorNaturalDomicilio)
    {
        $this->empleador_natural_domicilio = $empleadorNaturalDomicilio;

        return $this;
    }

    /**
     * Get empleador_natural_domicilio
     *
     * @return string 
     */
    public function getEmpleadorNaturalDomicilio()
    {
        return $this->empleador_natural_domicilio;
    }

    /**
     * Set empleador_natural_region
     *
     * @param string $empleadorNaturalRegion
     * @return Trabajo
     */
    public function setEmpleadorNaturalRegion($empleadorNaturalRegion)
    {
        $this->empleador_natural_region = $empleadorNaturalRegion;

        return $this;
    }

    /**
     * Get empleador_natural_region
     *
     * @return string 
     */
    public function getEmpleadorNaturalRegion()
    {
        return $this->empleador_natural_region;
    }

    /**
     * Set empleador_juridica_razon
     *
     * @param string $empleadorJuridicaRazon
     * @return Trabajo
     */
    public function setEmpleadorJuridicaRazon($empleadorJuridicaRazon)
    {
        $this->empleador_juridica_razon = $empleadorJuridicaRazon;

        return $this;
    }

    /**
     * Get empleador_juridica_razon
     *
     * @return string 
     */
    public function getEmpleadorJuridicaRazon()
    {
        return $this->empleador_juridica_razon;
    }

    /**
     * Set empleador_juridica_giro
     *
     * @param string $empleadorJuridicaGiro
     * @return Trabajo
     */
    public function setEmpleadorJuridicaGiro($empleadorJuridicaGiro)
    {
        $this->empleador_juridica_giro = $empleadorJuridicaGiro;

        return $this;
    }

    /**
     * Get empleador_juridica_giro
     *
     * @return string 
     */
    public function getEmpleadorJuridicaGiro()
    {
        return $this->empleador_juridica_giro;
    }

    /**
     * Set empleador_juridica_rut
     *
     * @param string $empleadorJuridicaRut
     * @return Trabajo
     */
    public function setEmpleadorJuridicaRut($empleadorJuridicaRut)
    {
        $this->empleador_juridica_rut = $empleadorJuridicaRut;

        return $this;
    }

    /**
     * Get empleador_juridica_rut
     *
     * @return string 
     */
    public function getEmpleadorJuridicaRut()
    {
        return $this->empleador_juridica_rut;
    }

    /**
     * Set empleador_juridica_domicilio
     *
     * @param string $empleadorJuridicaDomicilio
     * @return Trabajo
     */
    public function setEmpleadorJuridicaDomicilio($empleadorJuridicaDomicilio)
    {
        $this->empleador_juridica_domicilio = $empleadorJuridicaDomicilio;

        return $this;
    }

    /**
     * Get empleador_juridica_domicilio
     *
     * @return string 
     */
    public function getEmpleadorJuridicaDomicilio()
    {
        return $this->empleador_juridica_domicilio;
    }

    /**
     * Set empleador_juridica_region
     *
     * @param string $empleadorJuridicaRegion
     * @return Trabajo
     */
    public function setEmpleadorJuridicaRegion($empleadorJuridicaRegion)
    {
        $this->empleador_juridica_region = $empleadorJuridicaRegion;

        return $this;
    }

    /**
     * Get empleador_juridica_region
     *
     * @return string 
     */
    public function getEmpleadorJuridicaRegion()
    {
        return $this->empleador_juridica_region;
    }

    /**
     * Set empleador_juridica_personeria_fecha
     *
     * @param \DateTime $empleadorJuridicaPersoneriaFecha
     * @return Trabajo
     */
    public function setEmpleadorJuridicaPersoneriaFecha($empleadorJuridicaPersoneriaFecha)
    {
        $this->empleador_juridica_personeria_fecha = $empleadorJuridicaPersoneriaFecha;

        return $this;
    }

    /**
     * Get empleador_juridica_personeria_fecha
     *
     * @return \DateTime 
     */
    public function getEmpleadorJuridicaPersoneriaFecha()
    {
        return $this->empleador_juridica_personeria_fecha;
    }

    /**
     * Set empleador_juridica_personeria_notaria
     *
     * @param string $empleadorJuridicaPersoneriaNotaria
     * @return Trabajo
     */
    public function setEmpleadorJuridicaPersoneriaNotaria($empleadorJuridicaPersoneriaNotaria)
    {
        $this->empleador_juridica_personeria_notaria = $empleadorJuridicaPersoneriaNotaria;

        return $this;
    }

    /**
     * Get empleador_juridica_personeria_notaria
     *
     * @return string 
     */
    public function getEmpleadorJuridicaPersoneriaNotaria()
    {
        return $this->empleador_juridica_personeria_notaria;
    }

    /**
     * Set empleador_juridica_personeria_lugar
     *
     * @param string $empleadorJuridicaPersoneriaLugar
     * @return Trabajo
     */
    public function setEmpleadorJuridicaPersoneriaLugar($empleadorJuridicaPersoneriaLugar)
    {
        $this->empleador_juridica_personeria_lugar = $empleadorJuridicaPersoneriaLugar;

        return $this;
    }

    /**
     * Get empleador_juridica_personeria_lugar
     *
     * @return string 
     */
    public function getEmpleadorJuridicaPersoneriaLugar()
    {
        return $this->empleador_juridica_personeria_lugar;
    }

    /**
     * Set trabajador_sexo
     *
     * @param string $trabajadorSexo
     * @return Trabajo
     */
    public function setTrabajadorSexo($trabajadorSexo)
    {
        $this->trabajador_sexo = $trabajadorSexo;

        return $this;
    }

    /**
     * Get trabajador_sexo
     *
     * @return string 
     */
    public function getTrabajadorSexo()
    {
        return $this->trabajador_sexo;
    }

    /**
     * Set trabajador_nombres
     *
     * @param string $trabajadorNombres
     * @return Trabajo
     */
    public function setTrabajadorNombres($trabajadorNombres)
    {
        $this->trabajador_nombres = $trabajadorNombres;

        return $this;
    }

    /**
     * Get trabajador_nombres
     *
     * @return string 
     */
    public function getTrabajadorNombres()
    {
        return $this->trabajador_nombres;
    }

    /**
     * Set trabajador_apellido_paterno
     *
     * @param string $trabajadorApellidoPaterno
     * @return Trabajo
     */
    public function setTrabajadorApellidoPaterno($trabajadorApellidoPaterno)
    {
        $this->trabajador_apellido_paterno = $trabajadorApellidoPaterno;

        return $this;
    }

    /**
     * Get trabajador_apellido_paterno
     *
     * @return string 
     */
    public function getTrabajadorApellidoPaterno()
    {
        return $this->trabajador_apellido_paterno;
    }

    /**
     * Set trabajador_apellido_materno
     *
     * @param string $trabajadorApellidoMaterno
     * @return Trabajo
     */
    public function setTrabajadorApellidoMaterno($trabajadorApellidoMaterno)
    {
        $this->trabajador_apellido_materno = $trabajadorApellidoMaterno;

        return $this;
    }

    /**
     * Get trabajador_apellido_materno
     *
     * @return string 
     */
    public function getTrabajadorApellidoMaterno()
    {
        return $this->trabajador_apellido_materno;
    }

    /**
     * Set trabajador_extranjero
     *
     * @param boolean $trabajadorExtranjero
     * @return Trabajo
     */
    public function setTrabajadorExtranjero($trabajadorExtranjero)
    {
        $this->trabajador_extranjero = $trabajadorExtranjero;

        return $this;
    }

    /**
     * Get trabajador_extranjero
     *
     * @return boolean 
     */
    public function getTrabajadorExtranjero()
    {
        return $this->trabajador_extranjero;
    }

    /**
     * Set trabajador_nacionalidad
     *
     * @param string $trabajadorNacionalidad
     * @return Trabajo
     */
    public function setTrabajadorNacionalidad($trabajadorNacionalidad)
    {
        $this->trabajador_nacionalidad = $trabajadorNacionalidad;

        return $this;
    }

    /**
     * Get trabajador_nacionalidad
     *
     * @return string 
     */
    public function getTrabajadorNacionalidad()
    {
        return $this->trabajador_nacionalidad;
    }

    /**
     * Set trabajador_procedencia
     *
     * @param string $trabajadorProcedencia
     * @return Trabajo
     */
    public function setTrabajadorProcedencia($trabajadorProcedencia)
    {
        $this->trabajador_procedencia = $trabajadorProcedencia;

        return $this;
    }

    /**
     * Get trabajador_procedencia
     *
     * @return string 
     */
    public function getTrabajadorProcedencia()
    {
        return $this->trabajador_procedencia;
    }

    /**
     * Set trabajador_visa
     *
     * @param string $trabajadorVisa
     * @return Trabajo
     */
    public function setTrabajadorVisa($trabajadorVisa)
    {
        $this->trabajador_visa = $trabajadorVisa;

        return $this;
    }

    /**
     * Get trabajador_visa
     *
     * @return string 
     */
    public function getTrabajadorVisa()
    {
        return $this->trabajador_visa;
    }

    /**
     * Set trabajador_estado_civil
     *
     * @param string $trabajadorEstadoCivil
     * @return Trabajo
     */
    public function setTrabajadorEstadoCivil($trabajadorEstadoCivil)
    {
        $this->trabajador_estado_civil = $trabajadorEstadoCivil;

        return $this;
    }

    /**
     * Get trabajador_estado_civil
     *
     * @return string 
     */
    public function getTrabajadorEstadoCivil()
    {
        return $this->trabajador_estado_civil;
    }

    /**
     * Set trabajador_profesion
     *
     * @param string $trabajadorProfesion
     * @return Trabajo
     */
    public function setTrabajadorProfesion($trabajadorProfesion)
    {
        $this->trabajador_profesion = $trabajadorProfesion;

        return $this;
    }

    /**
     * Get trabajador_profesion
     *
     * @return string 
     */
    public function getTrabajadorProfesion()
    {
        return $this->trabajador_profesion;
    }

    /**
     * Set trabajador_rut
     *
     * @param string $trabajadorRut
     * @return Trabajo
     */
    public function setTrabajadorRut($trabajadorRut)
    {
        $this->trabajador_rut = $trabajadorRut;

        return $this;
    }

    /**
     * Get trabajador_rut
     *
     * @return string 
     */
    public function getTrabajadorRut()
    {
        return $this->trabajador_rut;
    }

    /**
     * Set trabajador_nacimiento
     *
     * @param \DateTime $trabajadorNacimiento
     * @return Trabajo
     */
    public function setTrabajadorNacimiento($trabajadorNacimiento)
    {
        $this->trabajador_nacimiento = $trabajadorNacimiento;

        return $this;
    }

    /**
     * Get trabajador_nacimiento
     *
     * @return \DateTime 
     */
    public function getTrabajadorNacimiento()
    {
        return $this->trabajador_nacimiento;
    }

    /**
     * Set trabajador_domicilio
     *
     * @param string $trabajadorDomicilio
     * @return Trabajo
     */
    public function setTrabajadorDomicilio($trabajadorDomicilio)
    {
        $this->trabajador_domicilio = $trabajadorDomicilio;

        return $this;
    }

    /**
     * Get trabajador_domicilio
     *
     * @return string 
     */
    public function getTrabajadorDomicilio()
    {
        return $this->trabajador_domicilio;
    }

    /**
     * Set trabajador_region
     *
     * @param string $trabajadorRegion
     * @return Trabajo
     */
    public function setTrabajadorRegion($trabajadorRegion)
    {
        $this->trabajador_region = $trabajadorRegion;

        return $this;
    }

    /**
     * Get trabajador_region
     *
     * @return string 
     */
    public function getTrabajadorRegion()
    {
        return $this->trabajador_region;
    }

    /**
     * Set actividad_empresa
     *
     * @param string $actividadEmpresa
     * @return Trabajo
     */
    public function setActividadEmpresa($actividadEmpresa)
    {
        $this->actividad_empresa = $actividadEmpresa;

        return $this;
    }

    /**
     * Get actividad_empresa
     *
     * @return string 
     */
    public function getActividadEmpresa()
    {
        return $this->actividad_empresa;
    }

    /**
     * Set actividad_empleado_funciones
     *
     * @param string $actividadEmpleadoFunciones
     * @return Trabajo
     */
    public function setActividadEmpleadoFunciones($actividadEmpleadoFunciones)
    {
        $this->actividad_empleado_funciones = $actividadEmpleadoFunciones;

        return $this;
    }

    /**
     * Get actividad_empleado_funciones
     *
     * @return string 
     */
    public function getActividadEmpleadoFunciones()
    {
        return $this->actividad_empleado_funciones;
    }

    /**
     * Set actividad_empleado_responsabilidades
     *
     * @param string $actividadEmpleadoResponsabilidades
     * @return Trabajo
     */
    public function setActividadEmpleadoResponsabilidades($actividadEmpleadoResponsabilidades)
    {
        $this->actividad_empleado_responsabilidades = $actividadEmpleadoResponsabilidades;

        return $this;
    }

    /**
     * Get actividad_empleado_responsabilidades
     *
     * @return string 
     */
    public function getActividadEmpleadoResponsabilidades()
    {
        return $this->actividad_empleado_responsabilidades;
    }

    /**
     * Set lugar_trabajo
     *
     * @param string $lugarTrabajo
     * @return Trabajo
     */
    public function setLugarTrabajo($lugarTrabajo)
    {
        $this->lugar_trabajo = $lugarTrabajo;

        return $this;
    }

    /**
     * Get lugar_trabajo
     *
     * @return string 
     */
    public function getLugarTrabajo()
    {
        return $this->lugar_trabajo;
    }

    /**
     * Set lugar_direccion
     *
     * @param string $lugarDireccion
     * @return Trabajo
     */
    public function setLugarDireccion($lugarDireccion)
    {
        $this->lugar_direccion = $lugarDireccion;

        return $this;
    }

    /**
     * Get lugar_direccion
     *
     * @return string 
     */
    public function getLugarDireccion()
    {
        return $this->lugar_direccion;
    }

    /**
     * Set lugar_ciudad
     *
     * @param string $lugarCiudad
     * @return Trabajo
     */
    public function setLugarCiudad($lugarCiudad)
    {
        $this->lugar_ciudad = $lugarCiudad;

        return $this;
    }

    /**
     * Get lugar_ciudad
     *
     * @return string 
     */
    public function getLugarCiudad()
    {
        return $this->lugar_ciudad;
    }

    /**
     * Set lugar_otro
     *
     * @param string $lugarOtro
     * @return Trabajo
     */
    public function setLugarOtro($lugarOtro)
    {
        $this->lugar_otro = $lugarOtro;

        return $this;
    }

    /**
     * Get lugar_otro
     *
     * @return string 
     */
    public function getLugarOtro()
    {
        return $this->lugar_otro;
    }

    /**
     * Set duracion_jornada_tipo
     *
     * @param string $duracionJornadaTipo
     * @return Trabajo
     */
    public function setDuracionJornadaTipo($duracionJornadaTipo)
    {
        $this->duracion_jornada_tipo = $duracionJornadaTipo;

        return $this;
    }

    /**
     * Get duracion_jornada_tipo
     *
     * @return string 
     */
    public function getDuracionJornadaTipo()
    {
        return $this->duracion_jornada_tipo;
    }

    /**
     * Set duracion_jornada_cantidad
     *
     * @param integer $duracionJornadaCantidad
     * @return Trabajo
     */
    public function setDuracionJornadaCantidad($duracionJornadaCantidad)
    {
        $this->duracion_jornada_cantidad = $duracionJornadaCantidad;

        return $this;
    }

    /**
     * Get duracion_jornada_cantidad
     *
     * @return integer 
     */
    public function getDuracionJornadaCantidad()
    {
        return $this->duracion_jornada_cantidad;
    }

    /**
     * Set duracion_jornada_colacion
     *
     * @param string $duracionJornadaColacion
     * @return Trabajo
     */
    public function setDuracionJornadaColacion($duracionJornadaColacion)
    {
        $this->duracion_jornada_colacion = $duracionJornadaColacion;

        return $this;
    }

    /**
     * Get duracion_jornada_colacion
     *
     * @return string 
     */
    public function getDuracionJornadaColacion()
    {
        return $this->duracion_jornada_colacion;
    }

    /**
     * Set duracion_jornada_alternativa
     *
     * @param boolean $duracionJornadaAlternativa
     * @return Trabajo
     */
    public function setDuracionJornadaAlternativa($duracionJornadaAlternativa)
    {
        $this->duracion_jornada_alternativa = $duracionJornadaAlternativa;

        return $this;
    }

    /**
     * Get duracion_jornada_alternativa
     *
     * @return boolean 
     */
    public function getDuracionJornadaAlternativa()
    {
        return $this->duracion_jornada_alternativa;
    }

    /**
     * Set sueldo_monto
     *
     * @param string $sueldoMonto
     * @return Trabajo
     */
    public function setSueldoMonto($sueldoMonto)
    {
        $this->sueldo_monto = $sueldoMonto;

        return $this;
    }

    /**
     * Get sueldo_monto
     *
     * @return string 
     */
    public function getSueldoMonto()
    {
        return $this->sueldo_monto;
    }

    /**
     * Set sueldo_unidad
     *
     * @param string $sueldoUnidad
     * @return Trabajo
     */
    public function setSueldoUnidad($sueldoUnidad)
    {
        $this->sueldo_unidad = $sueldoUnidad;

        return $this;
    }

    /**
     * Get sueldo_unidad
     *
     * @return string 
     */
    public function getSueldoUnidad()
    {
        return $this->sueldo_unidad;
    }

    /**
     * Set sueldo_frecuencia
     *
     * @param string $sueldoFrecuencia
     * @return Trabajo
     */
    public function setSueldoFrecuencia($sueldoFrecuencia)
    {
        $this->sueldo_frecuencia = $sueldoFrecuencia;

        return $this;
    }

    /**
     * Get sueldo_frecuencia
     *
     * @return string 
     */
    public function getSueldoFrecuencia()
    {
        return $this->sueldo_frecuencia;
    }

    /**
     * Set sueldo_periodo
     *
     * @param string $sueldoPeriodo
     * @return Trabajo
     */
    public function setSueldoPeriodo($sueldoPeriodo)
    {
        $this->sueldo_periodo = $sueldoPeriodo;

        return $this;
    }

    /**
     * Get sueldo_periodo
     *
     * @return string 
     */
    public function getSueldoPeriodo()
    {
        return $this->sueldo_periodo;
    }

    /**
     * Set sueldo_afp
     *
     * @param string $sueldoAfp
     * @return Trabajo
     */
    public function setSueldoAfp($sueldoAfp)
    {
        $this->sueldo_afp = $sueldoAfp;

        return $this;
    }

    /**
     * Get sueldo_afp
     *
     * @return string 
     */
    public function getSueldoAfp()
    {
        return $this->sueldo_afp;
    }

    /**
     * Set sueldo_salud
     *
     * @param string $sueldoSalud
     * @return Trabajo
     */
    public function setSueldoSalud($sueldoSalud)
    {
        $this->sueldo_salud = $sueldoSalud;

        return $this;
    }

    /**
     * Get sueldo_salud
     *
     * @return string 
     */
    public function getSueldoSalud()
    {
        return $this->sueldo_salud;
    }

    /**
     * Set sueldo_otra_remuneracion
     *
     * @param boolean $sueldoOtraRemuneracion
     * @return Trabajo
     */
    public function setSueldoOtraRemuneracion($sueldoOtraRemuneracion)
    {
        $this->sueldo_otra_remuneracion = $sueldoOtraRemuneracion;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion
     *
     * @return boolean 
     */
    public function getSueldoOtraRemuneracion()
    {
        return $this->sueldo_otra_remuneracion;
    }

    /**
     * Set sueldo_otra_remuneracion_comision
     *
     * @param boolean $sueldoOtraRemuneracionComision
     * @return Trabajo
     */
    public function setSueldoOtraRemuneracionComision($sueldoOtraRemuneracionComision)
    {
        $this->sueldo_otra_remuneracion_comision = $sueldoOtraRemuneracionComision;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion_comision
     *
     * @return boolean 
     */
    public function getSueldoOtraRemuneracionComision()
    {
        return $this->sueldo_otra_remuneracion_comision;
    }

    /**
     * Set sueldo_otra_remuneracion_comision_texto
     *
     * @param string $sueldoOtraRemuneracionComisionTexto
     * @return Trabajo
     */
    public function setSueldoOtraRemuneracionComisionTexto($sueldoOtraRemuneracionComisionTexto)
    {
        $this->sueldo_otra_remuneracion_comision_texto = $sueldoOtraRemuneracionComisionTexto;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion_comision_texto
     *
     * @return string 
     */
    public function getSueldoOtraRemuneracionComisionTexto()
    {
        return $this->sueldo_otra_remuneracion_comision_texto;
    }

    /**
     * Set sueldo_otra_remuneracion_participacion
     *
     * @param boolean $sueldoOtraRemuneracionParticipacion
     * @return Trabajo
     */
    public function setSueldoOtraRemuneracionParticipacion($sueldoOtraRemuneracionParticipacion)
    {
        $this->sueldo_otra_remuneracion_participacion = $sueldoOtraRemuneracionParticipacion;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion_participacion
     *
     * @return boolean 
     */
    public function getSueldoOtraRemuneracionParticipacion()
    {
        return $this->sueldo_otra_remuneracion_participacion;
    }

    /**
     * Set sueldo_otra_remuneracion_participacion_texto
     *
     * @param string $sueldoOtraRemuneracionParticipacionTexto
     * @return Trabajo
     */
    public function setSueldoOtraRemuneracionParticipacionTexto($sueldoOtraRemuneracionParticipacionTexto)
    {
        $this->sueldo_otra_remuneracion_participacion_texto = $sueldoOtraRemuneracionParticipacionTexto;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion_participacion_texto
     *
     * @return string 
     */
    public function getSueldoOtraRemuneracionParticipacionTexto()
    {
        return $this->sueldo_otra_remuneracion_participacion_texto;
    }

    /**
     * Set sueldo_otra_remuneracion_otro
     *
     * @param boolean $sueldoOtraRemuneracionOtro
     * @return Trabajo
     */
    public function setSueldoOtraRemuneracionOtro($sueldoOtraRemuneracionOtro)
    {
        $this->sueldo_otra_remuneracion_otro = $sueldoOtraRemuneracionOtro;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion_otro
     *
     * @return boolean 
     */
    public function getSueldoOtraRemuneracionOtro()
    {
        return $this->sueldo_otra_remuneracion_otro;
    }

    /**
     * Set sueldo_otra_remuneracion_otro_texto
     *
     * @param string $sueldoOtraRemuneracionOtroTexto
     * @return Trabajo
     */
    public function setSueldoOtraRemuneracionOtroTexto($sueldoOtraRemuneracionOtroTexto)
    {
        $this->sueldo_otra_remuneracion_otro_texto = $sueldoOtraRemuneracionOtroTexto;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion_otro_texto
     *
     * @return string 
     */
    public function getSueldoOtraRemuneracionOtroTexto()
    {
        return $this->sueldo_otra_remuneracion_otro_texto;
    }

    /**
     * Set sueldo_otra_beneficios
     *
     * @param boolean $sueldoOtraBeneficios
     * @return Trabajo
     */
    public function setSueldoOtraBeneficios($sueldoOtraBeneficios)
    {
        $this->sueldo_otra_beneficios = $sueldoOtraBeneficios;

        return $this;
    }

    /**
     * Get sueldo_otra_beneficios
     *
     * @return boolean 
     */
    public function getSueldoOtraBeneficios()
    {
        return $this->sueldo_otra_beneficios;
    }

    /**
     * Set sueldo_otra_beneficios_descripcion
     *
     * @param string $sueldoOtraBeneficiosDescripcion
     * @return Trabajo
     */
    public function setSueldoOtraBeneficiosDescripcion($sueldoOtraBeneficiosDescripcion)
    {
        $this->sueldo_otra_beneficios_descripcion = $sueldoOtraBeneficiosDescripcion;

        return $this;
    }

    /**
     * Get sueldo_otra_beneficios_descripcion
     *
     * @return string 
     */
    public function getSueldoOtraBeneficiosDescripcion()
    {
        return $this->sueldo_otra_beneficios_descripcion;
    }

    /**
     * Set duracion_contrato_tipo
     *
     * @param string $duracionContratoTipo
     * @return Trabajo
     */
    public function setDuracionContratoTipo($duracionContratoTipo)
    {
        $this->duracion_contrato_tipo = $duracionContratoTipo;

        return $this;
    }

    /**
     * Get duracion_contrato_tipo
     *
     * @return string 
     */
    public function getDuracionContratoTipo()
    {
        return $this->duracion_contrato_tipo;
    }

    /**
     * Set duracion_contrato_cantidad
     *
     * @param integer $duracionContratoCantidad
     * @return Trabajo
     */
    public function setDuracionContratoCantidad($duracionContratoCantidad)
    {
        $this->duracion_contrato_cantidad = $duracionContratoCantidad;

        return $this;
    }

    /**
     * Get duracion_contrato_cantidad
     *
     * @return integer 
     */
    public function getDuracionContratoCantidad()
    {
        return $this->duracion_contrato_cantidad;
    }

    /**
     * Set duracion_contrato_unidad
     *
     * @param string $duracionContratoUnidad
     * @return Trabajo
     */
    public function setDuracionContratoUnidad($duracionContratoUnidad)
    {
        $this->duracion_contrato_unidad = $duracionContratoUnidad;

        return $this;
    }

    /**
     * Get duracion_contrato_unidad
     *
     * @return string 
     */
    public function getDuracionContratoUnidad()
    {
        return $this->duracion_contrato_unidad;
    }

    /**
     * Set duracion_contrato_obra
     *
     * @param string $duracionContratoObra
     * @return Trabajo
     */
    public function setDuracionContratoObra($duracionContratoObra)
    {
        $this->duracion_contrato_obra = $duracionContratoObra;

        return $this;
    }

    /**
     * Get duracion_contrato_obra
     *
     * @return string 
     */
    public function getDuracionContratoObra()
    {
        return $this->duracion_contrato_obra;
    }

    /**
     * Set duracion_contrato_periodo
     *
     * @param string $duracionContratoPeriodo
     * @return Trabajo
     */
    public function setDuracionContratoPeriodo($duracionContratoPeriodo)
    {
        $this->duracion_contrato_periodo = $duracionContratoPeriodo;

        return $this;
    }

    /**
     * Get duracion_contrato_periodo
     *
     * @return string 
     */
    public function getDuracionContratoPeriodo()
    {
        return $this->duracion_contrato_periodo;
    }

    /**
     * Set duracion_contrato_fecha
     *
     * @param \DateTime $duracionContratoFecha
     * @return Trabajo
     */
    public function setDuracionContratoFecha($duracionContratoFecha)
    {
        $this->duracion_contrato_fecha = $duracionContratoFecha;

        return $this;
    }

    /**
     * Get duracion_contrato_fecha
     *
     * @return \DateTime 
     */
    public function getDuracionContratoFecha()
    {
        return $this->duracion_contrato_fecha;
    }

    /**
     * Set prestacion_fecha
     *
     * @param \DateTime $prestacionFecha
     * @return Trabajo
     */
    public function setPrestacionFecha($prestacionFecha)
    {
        $this->prestacion_fecha = $prestacionFecha;

        return $this;
    }

    /**
     * Get prestacion_fecha
     *
     * @return \DateTime 
     */
    public function getPrestacionFecha()
    {
        return $this->prestacion_fecha;
    }

    /**
     * Set empleador_natural_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $empleadorNaturalComuna
     * @return Trabajo
     */
    public function setEmpleadorNaturalComuna(\ContratosBundle\Entity\Comuna $empleadorNaturalComuna = null)
    {
        $this->empleador_natural_comuna = $empleadorNaturalComuna;

        return $this;
    }

    /**
     * Get empleador_natural_comuna
     *
     * @return \ContratosBundle\Entity\Comuna 
     */
    public function getEmpleadorNaturalComuna()
    {
        return $this->empleador_natural_comuna;
    }

    /**
     * Set trabajador_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $trabajadorComuna
     * @return Trabajo
     */
    public function setTrabajadorComuna(\ContratosBundle\Entity\Comuna $trabajadorComuna = null)
    {
        $this->trabajador_comuna = $trabajadorComuna;

        return $this;
    }

    /**
     * Get trabajador_comuna
     *
     * @return \ContratosBundle\Entity\Comuna 
     */
    public function getTrabajadorComuna()
    {
        return $this->trabajador_comuna;
    }

    /**
     * Set jurisdiccion_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $jurisdiccionComuna
     * @return Trabajo
     */
    public function setJurisdiccionComuna(\ContratosBundle\Entity\Comuna $jurisdiccionComuna = null)
    {
        $this->jurisdiccion_comuna = $jurisdiccionComuna;

        return $this;
    }

    /**
     * Get jurisdiccion_comuna
     *
     * @return \ContratosBundle\Entity\Comuna 
     */
    public function getJurisdiccionComuna()
    {
        return $this->jurisdiccion_comuna;
    }

    /**
     * Add trabajo_oficial_jornadas
     *
     * @param \ContratosBundle\Entity\Jornada $trabajoOficialJornadas
     * @return Trabajo
     */
    public function addTrabajoOficialJornada(\ContratosBundle\Entity\Jornada $trabajoOficialJornadas)
    {
        $this->trabajo_oficial_jornadas[] = $trabajoOficialJornadas;

        return $this;
    }

    /**
     * Remove trabajo_oficial_jornadas
     *
     * @param \ContratosBundle\Entity\Jornada $trabajoOficialJornadas
     */
    public function removeTrabajoOficialJornada(\ContratosBundle\Entity\Jornada $trabajoOficialJornadas)
    {
        $this->trabajo_oficial_jornadas->removeElement($trabajoOficialJornadas);
    }

    /**
     * Get trabajo_oficial_jornadas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrabajoOficialJornadas()
    {
        return $this->trabajo_oficial_jornadas;
    }

    /**
     * Add trabajo_alternativa_jornadas
     *
     * @param \ContratosBundle\Entity\Jornada $trabajoAlternativaJornadas
     * @return Trabajo
     */
    public function addTrabajoAlternativaJornada(\ContratosBundle\Entity\Jornada $trabajoAlternativaJornadas)
    {
        $this->trabajo_alternativa_jornadas[] = $trabajoAlternativaJornadas;

        return $this;
    }

    /**
     * Remove trabajo_alternativa_jornadas
     *
     * @param \ContratosBundle\Entity\Jornada $trabajoAlternativaJornadas
     */
    public function removeTrabajoAlternativaJornada(\ContratosBundle\Entity\Jornada $trabajoAlternativaJornadas)
    {
        $this->trabajo_alternativa_jornadas->removeElement($trabajoAlternativaJornadas);
    }

    /**
     * Get trabajo_alternativa_jornadas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrabajoAlternativaJornadas()
    {
        return $this->trabajo_alternativa_jornadas;
    }

    /**
     * Set duracion_jornada_cantidad_completa
     *
     * @param integer $duracionJornadaCantidadCompleta
     * @return Trabajo
     */
    public function setDuracionJornadaCantidadCompleta($duracionJornadaCantidadCompleta)
    {
        $this->duracion_jornada_cantidad_completa = $duracionJornadaCantidadCompleta;

        return $this;
    }

    /**
     * Get duracion_jornada_cantidad_completa
     *
     * @return integer 
     */
    public function getDuracionJornadaCantidadCompleta()
    {
        return $this->duracion_jornada_cantidad_completa;
    }

    /**
     * Set duracion_jornada_cantidad_parcial
     *
     * @param integer $duracionJornadaCantidadParcial
     * @return Trabajo
     */
    public function setDuracionJornadaCantidadParcial($duracionJornadaCantidadParcial)
    {
        $this->duracion_jornada_cantidad_parcial = $duracionJornadaCantidadParcial;

        return $this;
    }

    /**
     * Get duracion_jornada_cantidad_parcial
     *
     * @return integer 
     */
    public function getDuracionJornadaCantidadParcial()
    {
        return $this->duracion_jornada_cantidad_parcial;
    }

    /**
     * Add empleador_juridica_representantes
     *
     * @param \ContratosBundle\Entity\RepresentanteLegal $empleadorJuridicaRepresentantes
     * @return Trabajo
     */
    public function addEmpleadorJuridicaRepresentante(\ContratosBundle\Entity\RepresentanteLegal $empleadorJuridicaRepresentantes)
    {
        $this->empleador_juridica_representantes[] = $empleadorJuridicaRepresentantes;

        return $this;
    }

    /**
     * Remove empleador_juridica_representantes
     *
     * @param \ContratosBundle\Entity\RepresentanteLegal $empleadorJuridicaRepresentantes
     */
    public function removeEmpleadorJuridicaRepresentante(\ContratosBundle\Entity\RepresentanteLegal $empleadorJuridicaRepresentantes)
    {
        $this->empleador_juridica_representantes->removeElement($empleadorJuridicaRepresentantes);
    }

    /**
     * Get empleador_juridica_representantes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpleadorJuridicaRepresentantes()
    {
        return $this->empleador_juridica_representantes;
    }

    /**
     * Set empleador_juridica_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $empleadorJuridicaComuna
     * @return Trabajo
     */
    public function setEmpleadorJuridicaComuna(\ContratosBundle\Entity\Comuna $empleadorJuridicaComuna = null)
    {
        $this->empleador_juridica_comuna = $empleadorJuridicaComuna;

        return $this;
    }

    /**
     * Get empleador_juridica_comuna
     *
     * @return \ContratosBundle\Entity\Comuna 
     */
    public function getEmpleadorJuridicaComuna()
    {
        return $this->empleador_juridica_comuna;
    }
    
    /**
     * Get nombre formal
     *
     * @return string
     */
    public function getEmpleador()
    {
        if($this->empleador_persona == "Natural")
            return $this->empleador_natural_nombres.' '.$this->empleador_natural_apellido_paterno.' '.$this->empleador_natural_apellido_materno;
        else
            return $this->empleador_juridica_razon;
    }
    
    /**
     * Get empleador natural
     *
     * @return string 
     */
    public function getEmpleadorNatural()
    {
        return $this->empleador_natural_nombres.' '.$this->empleador_natural_apellido_paterno.' '.$this->empleador_natural_apellido_materno;
    }
    
    /**
     * Get trabajador
     *
     * @return string 
     */
    public function getTrabajador()
    {
        return $this->trabajador_nombres.' '.$this->trabajador_apellido_paterno.' '.$this->trabajador_apellido_materno;
    }
}
