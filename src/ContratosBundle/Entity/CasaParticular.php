<?php

namespace ContratosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CasaParticular
 */
class CasaParticular
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
    private $empleador_sexo = 'Hombre';

    /**
     * @var string
     */
    private $empleador_nombres;

    /**
     * @var string
     */
    private $empleador_apellido_paterno;

    /**
     * @var string
     */
    private $empleador_apellido_materno;

    /**
     * @var string
     */
    private $empleador_nacionalidad;

    /**
     * @var string
     */
    private $empleador_estado_civil;

    /**
     * @var string
     */
    private $empleador_profesion;

    /**
     * @var string
     */
    private $empleador_rut;

    /**
     * @var string
     */
    private $empleador_domicilio;

    /**
     * @var string
     */
    private $empleador_region;

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
     * @var string
     */
    private $trabajador_nacionalidad;

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
     * @var string
     */
    private $trabajador_domicilio;

    /**
     * @var string
     */
    private $trabajador_region;
    
    /**
     * @var boolean
     */
    private $trabajador_extranjero = 0;

    /**
     * @var string
     */
    private $trabajador_procedencia;

    /**
     * @var \DateTime
     */
    private $trabajador_nacimiento;
    
    /**
     * @var string
     */
    private $obligacion_funcion;

    /**
     * @var boolean
     */
    private $obligacion_puertas_adentro = true;

    /**
     * @var integer
     */
    private $obligacion_puertas_adentro_horas;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_colacion;

    /**
     * @var boolean
     */
    private $obligacion_condicion_cumplir = true;

    /**
     * @var boolean
     */
    private $obligacion_condicion_lealtad = true;

    /**
     * @var boolean
     */
    private $obligacion_condicion_aseo = true;

    /**
     * @var boolean
     */
    private $obligacion_condicion_jardin = true;

    /**
     * @var boolean
     */
    private $obligacion_condicion_chofer = true;

    /**
     * @var boolean
     */
    private $obligacion_condicion_otro = 0;

    /**
     * @var string
     */
    private $obligacion_condicion_otro_descripcion;

    /**
     * @var boolean
     */
    private $obligacion_requerimientos_especiales = 0;

    /**
     * @var string
     */
    private $obligacion_requerimientos_especiales_nombre;

    /**
     * @var string
     */
    private $obligacion_requerimientos_especiales_motivo;

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
    private $sueldo_otra_remuneracion = 0;

    /**
     * @var string
     */
    private $sueldo_otra_remuneracion_descripcion;

    /**
     * @var boolean
     */
    private $sueldo_otra_beneficios = 0;

    /**
     * @var string
     */
    private $sueldo_otra_beneficios_descripcion;

    /**
     * @var \DateTime
     */
    private $prestacion_fecha;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $empleador_comuna;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $trabajador_comuna;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $jurisdiccion_comuna;


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
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Set empleador_sexo
     *
     * @param string $empleadorSexo
     * @return CasaParticular
     */
    public function setEmpleadorSexo($empleadorSexo)
    {
        $this->empleador_sexo = $empleadorSexo;

        return $this;
    }

    /**
     * Get empleador_sexo
     *
     * @return string 
     */
    public function getEmpleadorSexo()
    {
        return $this->empleador_sexo;
    }

    /**
     * Set empleador_nombres
     *
     * @param string $empleadorNombres
     * @return CasaParticular
     */
    public function setEmpleadorNombres($empleadorNombres)
    {
        $this->empleador_nombres = $empleadorNombres;

        return $this;
    }
    
    /**
     * Get empleador_nombres
     *
     * @return string 
     */
    public function getEmpleador()
    {
        return $this->empleador_nombres.' '.$this->empleador_apellido_paterno.' '.$this->empleador_apellido_materno;
    }
    
    /**
     * Get empleador_nombres
     *
     * @return string 
     */
    public function getEmpleadorNombres()
    {
        return $this->empleador_nombres;
    }

    /**
     * Set empleador_apellido_paterno
     *
     * @param string $empleadorApellidoPaterno
     * @return CasaParticular
     */
    public function setEmpleadorApellidoPaterno($empleadorApellidoPaterno)
    {
        $this->empleador_apellido_paterno = $empleadorApellidoPaterno;

        return $this;
    }

    /**
     * Get empleador_apellido_paterno
     *
     * @return string 
     */
    public function getEmpleadorApellidoPaterno()
    {
        return $this->empleador_apellido_paterno;
    }

    /**
     * Set empleador_apellido_materno
     *
     * @param string $empleadorApellidoMaterno
     * @return CasaParticular
     */
    public function setEmpleadorApellidoMaterno($empleadorApellidoMaterno)
    {
        $this->empleador_apellido_materno = $empleadorApellidoMaterno;

        return $this;
    }

    /**
     * Get empleador_apellido_materno
     *
     * @return string 
     */
    public function getEmpleadorApellidoMaterno()
    {
        return $this->empleador_apellido_materno;
    }

    /**
     * Set empleador_nacionalidad
     *
     * @param string $empleadorNacionalidad
     * @return CasaParticular
     */
    public function setEmpleadorNacionalidad($empleadorNacionalidad)
    {
        $this->empleador_nacionalidad = $empleadorNacionalidad;

        return $this;
    }

    /**
     * Get empleador_nacionalidad
     *
     * @return string 
     */
    public function getEmpleadorNacionalidad()
    {
        return $this->empleador_nacionalidad;
    }

    /**
     * Set empleador_estado_civil
     *
     * @param string $empleadorEstadoCivil
     * @return CasaParticular
     */
    public function setEmpleadorEstadoCivil($empleadorEstadoCivil)
    {
        $this->empleador_estado_civil = $empleadorEstadoCivil;

        return $this;
    }

    /**
     * Get empleador_estado_civil
     *
     * @return string 
     */
    public function getEmpleadorEstadoCivil()
    {
        return $this->empleador_estado_civil;
    }

    /**
     * Set empleador_profesion
     *
     * @param string $empleadorProfesion
     * @return CasaParticular
     */
    public function setEmpleadorProfesion($empleadorProfesion)
    {
        $this->empleador_profesion = $empleadorProfesion;

        return $this;
    }

    /**
     * Get empleador_profesion
     *
     * @return string 
     */
    public function getEmpleadorProfesion()
    {
        return $this->empleador_profesion;
    }

    /**
     * Set empleador_rut
     *
     * @param string $empleadorRut
     * @return CasaParticular
     */
    public function setEmpleadorRut($empleadorRut)
    {
        $this->empleador_rut = $empleadorRut;

        return $this;
    }

    /**
     * Get empleador_rut
     *
     * @return string 
     */
    public function getEmpleadorRut()
    {
        return $this->empleador_rut;
    }

    /**
     * Set empleador_domicilio
     *
     * @param string $empleadorDomicilio
     * @return CasaParticular
     */
    public function setEmpleadorDomicilio($empleadorDomicilio)
    {
        $this->empleador_domicilio = $empleadorDomicilio;

        return $this;
    }

    /**
     * Get empleador_domicilio
     *
     * @return string 
     */
    public function getEmpleadorDomicilio()
    {
        return $this->empleador_domicilio;
    }

    /**
     * Set empleador_region
     *
     * @param string $empleadorRegion
     * @return CasaParticular
     */
    public function setEmpleadorRegion($empleadorRegion)
    {
        $this->empleador_region = $empleadorRegion;

        return $this;
    }

    /**
     * Get empleador_region
     *
     * @return string 
     */
    public function getEmpleadorRegion()
    {
        return $this->empleador_region;
    }

    /**
     * Set trabajador_sexo
     *
     * @param string $trabajadorSexo
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Get trabajador
     *
     * @return string 
     */
    public function getTrabajador()
    {
        return $this->trabajador_nombres.' '.$this->trabajador_apellido_paterno.' '.$this->trabajador_apellido_materno;
    }

    /**
     * Set trabajador_apellido_paterno
     *
     * @param string $trabajadorApellidoPaterno
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Set trabajador_nacionalidad
     *
     * @param string $trabajadorNacionalidad
     * @return CasaParticular
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
     * Set trabajador_estado_civil
     *
     * @param string $trabajadorEstadoCivil
     * @return CasaParticular
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
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Set trabajador_domicilio
     *
     * @param string $trabajadorDomicilio
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Set obligacion_funcion
     *
     * @param string $obligacionFuncion
     * @return CasaParticular
     */
    public function setObligacionFuncion($obligacionFuncion)
    {
        $this->obligacion_funcion = $obligacionFuncion;

        return $this;
    }

    /**
     * Get obligacion_funcion
     *
     * @return string 
     */
    public function getObligacionFuncion()
    {
        return $this->obligacion_funcion;
    }

    /**
     * Set obligacion_puertas_adentro
     *
     * @param boolean $obligacionPuertasAdentro
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentro($obligacionPuertasAdentro)
    {
        $this->obligacion_puertas_adentro = $obligacionPuertasAdentro;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro
     *
     * @return boolean 
     */
    public function getObligacionPuertasAdentro()
    {
        return $this->obligacion_puertas_adentro;
    }

    /**
     * Set obligacion_puertas_adentro_horas
     *
     * @param integer $obligacionPuertasAdentroHoras
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHoras($obligacionPuertasAdentroHoras)
    {
        $this->obligacion_puertas_adentro_horas = $obligacionPuertasAdentroHoras;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horas
     *
     * @return integer 
     */
    public function getObligacionPuertasAdentroHoras()
    {
        return $this->obligacion_puertas_adentro_horas;
    }

    /**
     * Set obligacion_puertas_adentro_colacion
     *
     * @param string $obligacionPuertasAdentroColacion
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroColacion($obligacionPuertasAdentroColacion)
    {
        $this->obligacion_puertas_adentro_colacion = $obligacionPuertasAdentroColacion;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_colacion
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroColacion()
    {
        return $this->obligacion_puertas_adentro_colacion;
    }

    /**
     * Set obligacion_condicion_cumplir
     *
     * @param boolean $obligacionCondicionCumplir
     * @return CasaParticular
     */
    public function setObligacionCondicionCumplir($obligacionCondicionCumplir)
    {
        $this->obligacion_condicion_cumplir = $obligacionCondicionCumplir;

        return $this;
    }

    /**
     * Get obligacion_condicion_cumplir
     *
     * @return boolean 
     */
    public function getObligacionCondicionCumplir()
    {
        return $this->obligacion_condicion_cumplir;
    }

    /**
     * Set obligacion_condicion_lealtad
     *
     * @param boolean $obligacionCondicionLealtad
     * @return CasaParticular
     */
    public function setObligacionCondicionLealtad($obligacionCondicionLealtad)
    {
        $this->obligacion_condicion_lealtad = $obligacionCondicionLealtad;

        return $this;
    }

    /**
     * Get obligacion_condicion_lealtad
     *
     * @return boolean 
     */
    public function getObligacionCondicionLealtad()
    {
        return $this->obligacion_condicion_lealtad;
    }

    /**
     * Set obligacion_condicion_aseo
     *
     * @param boolean $obligacionCondicionAseo
     * @return CasaParticular
     */
    public function setObligacionCondicionAseo($obligacionCondicionAseo)
    {
        $this->obligacion_condicion_aseo = $obligacionCondicionAseo;

        return $this;
    }

    /**
     * Get obligacion_condicion_aseo
     *
     * @return boolean 
     */
    public function getObligacionCondicionAseo()
    {
        return $this->obligacion_condicion_aseo;
    }

    /**
     * Set obligacion_condicion_jardin
     *
     * @param boolean $obligacionCondicionJardin
     * @return CasaParticular
     */
    public function setObligacionCondicionJardin($obligacionCondicionJardin)
    {
        $this->obligacion_condicion_jardin = $obligacionCondicionJardin;

        return $this;
    }

    /**
     * Get obligacion_condicion_jardin
     *
     * @return boolean 
     */
    public function getObligacionCondicionJardin()
    {
        return $this->obligacion_condicion_jardin;
    }

    /**
     * Set obligacion_condicion_chofer
     *
     * @param boolean $obligacionCondicionChofer
     * @return CasaParticular
     */
    public function setObligacionCondicionChofer($obligacionCondicionChofer)
    {
        $this->obligacion_condicion_chofer = $obligacionCondicionChofer;

        return $this;
    }

    /**
     * Get obligacion_condicion_chofer
     *
     * @return boolean 
     */
    public function getObligacionCondicionChofer()
    {
        return $this->obligacion_condicion_chofer;
    }

    /**
     * Set obligacion_condicion_otro
     *
     * @param boolean $obligacionCondicionOtro
     * @return CasaParticular
     */
    public function setObligacionCondicionOtro($obligacionCondicionOtro)
    {
        $this->obligacion_condicion_otro = $obligacionCondicionOtro;

        return $this;
    }

    /**
     * Get obligacion_condicion_otro
     *
     * @return boolean 
     */
    public function getObligacionCondicionOtro()
    {
        return $this->obligacion_condicion_otro;
    }

    /**
     * Set obligacion_condicion_otro_descripcion
     *
     * @param string $obligacionCondicionOtroDescripcion
     * @return CasaParticular
     */
    public function setObligacionCondicionOtroDescripcion($obligacionCondicionOtroDescripcion)
    {
        $this->obligacion_condicion_otro_descripcion = $obligacionCondicionOtroDescripcion;

        return $this;
    }

    /**
     * Get obligacion_condicion_otro_descripcion
     *
     * @return string 
     */
    public function getObligacionCondicionOtroDescripcion()
    {
        return $this->obligacion_condicion_otro_descripcion;
    }

    /**
     * Set obligacion_requerimientos_especiales
     *
     * @param boolean $obligacionRequerimientosEspeciales
     * @return CasaParticular
     */
    public function setObligacionRequerimientosEspeciales($obligacionRequerimientosEspeciales)
    {
        $this->obligacion_requerimientos_especiales = $obligacionRequerimientosEspeciales;

        return $this;
    }

    /**
     * Get obligacion_requerimientos_especiales
     *
     * @return boolean 
     */
    public function getObligacionRequerimientosEspeciales()
    {
        return $this->obligacion_requerimientos_especiales;
    }

    /**
     * Set obligacion_requerimientos_especiales_nombre
     *
     * @param string $obligacionRequerimientosEspecialesNombre
     * @return CasaParticular
     */
    public function setObligacionRequerimientosEspecialesNombre($obligacionRequerimientosEspecialesNombre)
    {
        $this->obligacion_requerimientos_especiales_nombre = $obligacionRequerimientosEspecialesNombre;

        return $this;
    }

    /**
     * Get obligacion_requerimientos_especiales_nombre
     *
     * @return string 
     */
    public function getObligacionRequerimientosEspecialesNombre()
    {
        return $this->obligacion_requerimientos_especiales_nombre;
    }

    /**
     * Set obligacion_requerimientos_especiales_motivo
     *
     * @param string $obligacionRequerimientosEspecialesMotivo
     * @return CasaParticular
     */
    public function setObligacionRequerimientosEspecialesMotivo($obligacionRequerimientosEspecialesMotivo)
    {
        $this->obligacion_requerimientos_especiales_motivo = $obligacionRequerimientosEspecialesMotivo;

        return $this;
    }

    /**
     * Get obligacion_requerimientos_especiales_motivo
     *
     * @return string 
     */
    public function getObligacionRequerimientosEspecialesMotivo()
    {
        return $this->obligacion_requerimientos_especiales_motivo;
    }

    /**
     * Set sueldo_monto
     *
     * @param string $sueldoMonto
     * @return CasaParticular
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
     * @return CasaParticular
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
     * @return CasaParticular
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
     * @return CasaParticular
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
     * @return CasaParticular
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
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Set sueldo_otra_remuneracion_descripcion
     *
     * @param string $sueldoOtraRemuneracionDescripcion
     * @return CasaParticular
     */
    public function setSueldoOtraRemuneracionDescripcion($sueldoOtraRemuneracionDescripcion)
    {
        $this->sueldo_otra_remuneracion_descripcion = $sueldoOtraRemuneracionDescripcion;

        return $this;
    }

    /**
     * Get sueldo_otra_remuneracion_descripcion
     *
     * @return string 
     */
    public function getSueldoOtraRemuneracionDescripcion()
    {
        return $this->sueldo_otra_remuneracion_descripcion;
    }

    /**
     * Set sueldo_otra_beneficios
     *
     * @param boolean $sueldoOtraBeneficios
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Set prestacion_fecha
     *
     * @param \DateTime $prestacionFecha
     * @return CasaParticular
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
     * Set empleador_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $empleadorComuna
     * @return CasaParticular
     */
    public function setEmpleadorComuna(\ContratosBundle\Entity\Comuna $empleadorComuna = null)
    {
        $this->empleador_comuna = $empleadorComuna;

        return $this;
    }

    /**
     * Get empleador_comuna
     *
     * @return \ContratosBundle\Entity\Comuna 
     */
    public function getEmpleadorComuna()
    {
        return $this->empleador_comuna;
    }

    /**
     * Set trabajador_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $trabajadorComuna
     * @return CasaParticular
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
     * @return CasaParticular
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
     * Set trabajador_extranjero
     *
     * @param boolean $trabajadorExtranjero
     * @return CasaParticular
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
     * Set trabajador_procedencia
     *
     * @param string $trabajadorProcedencia
     * @return CasaParticular
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
     * Set trabajador_nacimiento
     *
     * @param \DateTime $trabajadorNacimiento
     * @return CasaParticular
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
     * @var string
     */
    private $obligacion_puertas_adentro_horario_lunes_inicio;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_lunes_fin;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_martes_inicio;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_martes_fin;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_miercoles_inicio;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_miercoles_fin;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_jueves_inicio;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_jueves_fin;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_viernes_inicio;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_viernes_fin;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_sabado_inicio;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_sabado_fin;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_domingo_inicio;

    /**
     * @var string
     */
    private $obligacion_puertas_adentro_horario_domingo_fin;


    /**
     * Set obligacion_puertas_adentro_horario_lunes_inicio
     *
     * @param string $obligacionPuertasAdentroHorarioLunesInicio
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioLunesInicio($obligacionPuertasAdentroHorarioLunesInicio)
    {
        $this->obligacion_puertas_adentro_horario_lunes_inicio = $obligacionPuertasAdentroHorarioLunesInicio;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_lunes_inicio
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioLunesInicio()
    {
        return $this->obligacion_puertas_adentro_horario_lunes_inicio;
    }

    /**
     * Set obligacion_puertas_adentro_horario_lunes_fin
     *
     * @param string $obligacionPuertasAdentroHorarioLunesFin
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioLunesFin($obligacionPuertasAdentroHorarioLunesFin)
    {
        $this->obligacion_puertas_adentro_horario_lunes_fin = $obligacionPuertasAdentroHorarioLunesFin;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_lunes_fin
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioLunesFin()
    {
        return $this->obligacion_puertas_adentro_horario_lunes_fin;
    }

    /**
     * Set obligacion_puertas_adentro_horario_martes_inicio
     *
     * @param string $obligacionPuertasAdentroHorarioMartesInicio
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioMartesInicio($obligacionPuertasAdentroHorarioMartesInicio)
    {
        $this->obligacion_puertas_adentro_horario_martes_inicio = $obligacionPuertasAdentroHorarioMartesInicio;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_martes_inicio
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioMartesInicio()
    {
        return $this->obligacion_puertas_adentro_horario_martes_inicio;
    }

    /**
     * Set obligacion_puertas_adentro_horario_martes_fin
     *
     * @param string $obligacionPuertasAdentroHorarioMartesFin
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioMartesFin($obligacionPuertasAdentroHorarioMartesFin)
    {
        $this->obligacion_puertas_adentro_horario_martes_fin = $obligacionPuertasAdentroHorarioMartesFin;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_martes_fin
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioMartesFin()
    {
        return $this->obligacion_puertas_adentro_horario_martes_fin;
    }

    /**
     * Set obligacion_puertas_adentro_horario_miercoles_inicio
     *
     * @param string $obligacionPuertasAdentroHorarioMiercolesInicio
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioMiercolesInicio($obligacionPuertasAdentroHorarioMiercolesInicio)
    {
        $this->obligacion_puertas_adentro_horario_miercoles_inicio = $obligacionPuertasAdentroHorarioMiercolesInicio;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_miercoles_inicio
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioMiercolesInicio()
    {
        return $this->obligacion_puertas_adentro_horario_miercoles_inicio;
    }

    /**
     * Set obligacion_puertas_adentro_horario_miercoles_fin
     *
     * @param string $obligacionPuertasAdentroHorarioMiercolesFin
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioMiercolesFin($obligacionPuertasAdentroHorarioMiercolesFin)
    {
        $this->obligacion_puertas_adentro_horario_miercoles_fin = $obligacionPuertasAdentroHorarioMiercolesFin;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_miercoles_fin
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioMiercolesFin()
    {
        return $this->obligacion_puertas_adentro_horario_miercoles_fin;
    }

    /**
     * Set obligacion_puertas_adentro_horario_jueves_inicio
     *
     * @param string $obligacionPuertasAdentroHorarioJuevesInicio
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioJuevesInicio($obligacionPuertasAdentroHorarioJuevesInicio)
    {
        $this->obligacion_puertas_adentro_horario_jueves_inicio = $obligacionPuertasAdentroHorarioJuevesInicio;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_jueves_inicio
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioJuevesInicio()
    {
        return $this->obligacion_puertas_adentro_horario_jueves_inicio;
    }

    /**
     * Set obligacion_puertas_adentro_horario_jueves_fin
     *
     * @param string $obligacionPuertasAdentroHorarioJuevesFin
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioJuevesFin($obligacionPuertasAdentroHorarioJuevesFin)
    {
        $this->obligacion_puertas_adentro_horario_jueves_fin = $obligacionPuertasAdentroHorarioJuevesFin;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_jueves_fin
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioJuevesFin()
    {
        return $this->obligacion_puertas_adentro_horario_jueves_fin;
    }

    /**
     * Set obligacion_puertas_adentro_horario_viernes_inicio
     *
     * @param string $obligacionPuertasAdentroHorarioViernesInicio
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioViernesInicio($obligacionPuertasAdentroHorarioViernesInicio)
    {
        $this->obligacion_puertas_adentro_horario_viernes_inicio = $obligacionPuertasAdentroHorarioViernesInicio;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_viernes_inicio
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioViernesInicio()
    {
        return $this->obligacion_puertas_adentro_horario_viernes_inicio;
    }

    /**
     * Set obligacion_puertas_adentro_horario_viernes_fin
     *
     * @param string $obligacionPuertasAdentroHorarioViernesFin
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioViernesFin($obligacionPuertasAdentroHorarioViernesFin)
    {
        $this->obligacion_puertas_adentro_horario_viernes_fin = $obligacionPuertasAdentroHorarioViernesFin;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_viernes_fin
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioViernesFin()
    {
        return $this->obligacion_puertas_adentro_horario_viernes_fin;
    }

    /**
     * Set obligacion_puertas_adentro_horario_sabado_inicio
     *
     * @param string $obligacionPuertasAdentroHorarioSabadoInicio
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioSabadoInicio($obligacionPuertasAdentroHorarioSabadoInicio)
    {
        $this->obligacion_puertas_adentro_horario_sabado_inicio = $obligacionPuertasAdentroHorarioSabadoInicio;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_sabado_inicio
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioSabadoInicio()
    {
        return $this->obligacion_puertas_adentro_horario_sabado_inicio;
    }

    /**
     * Set obligacion_puertas_adentro_horario_sabado_fin
     *
     * @param string $obligacionPuertasAdentroHorarioSabadoFin
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioSabadoFin($obligacionPuertasAdentroHorarioSabadoFin)
    {
        $this->obligacion_puertas_adentro_horario_sabado_fin = $obligacionPuertasAdentroHorarioSabadoFin;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_sabado_fin
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioSabadoFin()
    {
        return $this->obligacion_puertas_adentro_horario_sabado_fin;
    }

    /**
     * Set obligacion_puertas_adentro_horario_domingo_inicio
     *
     * @param string $obligacionPuertasAdentroHorarioDomingoInicio
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioDomingoInicio($obligacionPuertasAdentroHorarioDomingoInicio)
    {
        $this->obligacion_puertas_adentro_horario_domingo_inicio = $obligacionPuertasAdentroHorarioDomingoInicio;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_domingo_inicio
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioDomingoInicio()
    {
        return $this->obligacion_puertas_adentro_horario_domingo_inicio;
    }

    /**
     * Set obligacion_puertas_adentro_horario_domingo_fin
     *
     * @param string $obligacionPuertasAdentroHorarioDomingoFin
     * @return CasaParticular
     */
    public function setObligacionPuertasAdentroHorarioDomingoFin($obligacionPuertasAdentroHorarioDomingoFin)
    {
        $this->obligacion_puertas_adentro_horario_domingo_fin = $obligacionPuertasAdentroHorarioDomingoFin;

        return $this;
    }

    /**
     * Get obligacion_puertas_adentro_horario_domingo_fin
     *
     * @return string 
     */
    public function getObligacionPuertasAdentroHorarioDomingoFin()
    {
        return $this->obligacion_puertas_adentro_horario_domingo_fin;
    }
}
