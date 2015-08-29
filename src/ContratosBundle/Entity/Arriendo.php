<?php

namespace ContratosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arriendo
 */
class Arriendo
{
    /**
     * @var integer
     */
    private $id;

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
     * @var string
     */
    private $arrendador_persona;

    /**
     * @var string
     */
    private $arrendador_natural_sexo = "Hombre";

    /**
     * @var string
     */
    private $arrendador_natural_nombres;

    /**
     * @var string
     */
    private $arrendador_natural_apellido_paterno;

    /**
     * @var string
     */
    private $arrendador_natural_apellido_materno;

    /**
     * @var string
     */
    private $arrendador_natural_nacionalidad;

    /**
     * @var string
     */
    private $arrendador_natural_estado_civil;

    /**
     * @var string
     */
    private $arrendador_natural_profesion;

    /**
     * @var string
     */
    private $arrendador_natural_rut;

    /**
     * @var string
     */
    private $arrendador_natural_domicilio;

    /**
     * @var string
     */
    private $arrendador_natural_comuna;

    /**
     * @var string
     */
    private $arrendador_natural_region;

    /**
     * @var string
     */
    private $arrendador_juridica_razon;

    /**
     * @var string
     */
    private $arrendador_juridica_giro;

    /**
     * @var string
     */
    private $arrendador_juridica_rut;

    /**
     * @var string
     */
    private $arrendador_juridica_domicilio;

    /**
     * @var string
     */
    private $arrendador_juridica_comuna;

    /**
     * @var string
     */
    private $arrendador_juridica_region;

    /**
     * @var string
     */
    private $arrendatario_persona;

    /**
     * @var string
     */
    private $arrendatario_natural_sexo = "Hombre";

    /**
     * @var string
     */
    private $arrendatario_natural_nombres;

    /**
     * @var string
     */
    private $arrendatario_natural_apellido_paterno;

    /**
     * @var string
     */
    private $arrendatario_natural_apellido_materno;

    /**
     * @var string
     */
    private $arrendatario_natural_nacionalidad;

    /**
     * @var string
     */
    private $arrendatario_natural_estado_civil;

    /**
     * @var string
     */
    private $arrendatario_natural_profesion;

    /**
     * @var string
     */
    private $arrendatario_natural_rut;

    /**
     * @var string
     */
    private $arrendatario_natural_domicilio;

    /**
     * @var string
     */
    private $arrendatario_natural_comuna;

    /**
     * @var string
     */
    private $arrendatario_natural_region;

    /**
     * @var string
     */
    private $arrendatario_juridica_razon;

    /**
     * @var string
     */
    private $arrendatario_juridica_giro;

    /**
     * @var string
     */
    private $arrendatario_juridica_rut;

    /**
     * @var string
     */
    private $arrendatario_juridica_domicilio;

    /**
     * @var string
     */
    private $arrendatario_juridica_comuna;

    /**
     * @var string
     */
    private $arrendatario_juridica_region;

    /**
     * @var string
     */
    private $propiedad_calle;

    /**
     * @var string
     */
    private $propiedad_numero;

    /**
     * @var string
     */
    private $propiedad_departamento;

    /**
     * @var string
     */
    private $propiedad_villa;

    /**
     * @var string
     */
    private $propiedad_region;

    /**
     * @var string
     */
    private $propiedad_comuna;

    /**
     * @var string
     */
    private $plazo_unidad;

    /**
     * @var string
     */
    private $plazo_momento;

    /**
     * @var string
     */
    private $plazo_prorroga = "No";

    /**
     * @var string
     */
    private $plazo_prorroga_tiempo;

    /**
     * @var string
     */
    private $plazo_aviso;

    /**
     * @var string
     */
    private $plazo_forma;

    /**
     * @var string
     */
    private $plazo_carta;

    /**
     * @var string
     */
    private $renta_monto;

    /**
     * @var string
     */
    private $renta_unidad;

    /**
     * @var string
     */
    private $renta_periodo;

    /**
     * @var string
     */
    private $renta_tiempo;

    /**
     * @var string
     */
    private $renta_dias;

    /**
     * @var string
     */
    private $renta_medio_pago;

    /**
     * @var string
     */
    private $renta_medio_efectivo;

    /**
     * @var string
     */
    private $renta_medio_cheque;

    /**
     * @var string
     */
    private $renta_medio_deposito_titular;

    /**
     * @var string
     */
    private $renta_medio_deposito_tipo;

    /**
     * @var string
     */
    private $renta_medio_deposito_numero;

    /**
     * @var string
     */
    private $renta_medio_deposito_banco;

    /**
     * @var string
     */
    private $renta_medio_deposito_envio;

    /**
     * @var string
     */
    private $renta_medio_reajuste = "No";

    /**
     * @var string
     */
    private $renta_reajuste_periodo;

    /**
     * @var string
     */
    private $renta_reajuste_forma;

    /**
     * @var string
     */
    private $renta_mora_sancion = "No";

    /**
     * @var string
     */
    private $renta_mora_periodo;

    /**
     * @var string
     */
    private $renta_mora_valor;

    /**
     * @var string
     */
    private $renta_cobranza = "No";

    /**
     * @var string
     */
    private $renta_cobranza_plazo;

    /**
     * @var string
     */
    private $renta_cobranza_notificacion;

    /**
     * @var string
     */
    private $renta_cobranza_avaluo;

    /**
     * @var string
     */
    private $entrega_fecha;

    /**
     * @var string
     */
    private $entrega_inventario = "No";

    /**
     * @var string
     */
    private $restitucion_forma;

    /**
     * @var string
     */
    private $restitucion_acreditacion;

    /**
     * @var string
     */
    private $restitucion_visita_plazo;

    /**
     * @var string
     */
    private $restitucion_visita_unidad;

    /**
     * @var string
     */
    private $restitucion_inicio_plazo;

    /**
     * @var string
     */
    private $restitucion_inicio_unidad;

    /**
     * @var boolean
     */
    private $prohibicion_subarriendo;

    /**
     * @var boolean
     */
    private $prohibicion_variaciones;

    /**
     * @var boolean
     */
    private $prohibicion_utilizacion;

    /**
     * @var boolean
     */
    private $prohibicion_retraso;

    /**
     * @var boolean
     */
    private $prohibicion_perturbacion;

    /**
     * @var boolean
     */
    private $prohibicion_agujeros;

    /**
     * @var boolean
     */
    private $prohibicion_normativa;

    /**
     * @var boolean
     */
    private $prohibicion_accion_ilegal;

    /**
     * @var string
     */
    private $recision_pago;

    /**
     * @var string
     */
    private $recision_unidad;

    /**
     * @var boolean
     */
    private $recision_causal;

    /**
     * @var string
     */
    private $recision_causal_descripcion;

    /**
     * @var boolean
     */
    private $recision_unilateral = "No";

    /**
     * @var string
     */
    private $recision_unilateral_anticipacion;

    /**
     * @var string
     */
    private $recision_unilateral_unidad;

    /**
     * @var string
     */
    private $recision_unilateral_forma;

    /**
     * @var boolean
     */
    private $garantia_deposito = "No";

    /**
     * @var string
     */
    private $garantia_forma;

    /**
     * @var string
     */
    private $garantia_monto;

    /**
     * @var string
     */
    private $garantia_dias_terminado;

    /**
     * @var string
     */
    private $garantia_dias_pagado;

    /**
     * @var string
     */
    private $garantia_unidad;

    /**
     * @var boolean
     */
    private $aval = "No";

    /**
     * @var string
     */
    private $aval_sexo = "Hombre";

    /**
     * @var string
     */
    private $aval_nombres;

    /**
     * @var string
     */
    private $aval_apellido_paterno;

    /**
     * @var string
     */
    private $aval_apellido_materno;

    /**
     * @var string
     */
    private $aval_nacionalidad;

    /**
     * @var string
     */
    private $aval_estado_civil;

    /**
     * @var string
     */
    private $aval_profesion;

    /**
     * @var string
     */
    private $aval_rut;

    /**
     * @var string
     */
    private $aval_domicilio;

    /**
     * @var string
     */
    private $aval_comuna;

    /**
     * @var string
     */
    private $aval_region;

    /**
     * @var boolean
     */
    private $correo = "No";

    /**
     * @var string
     */
    private $correo_arrendador;

    /**
     * @var string
     */
    private $correo_arrendatario;

    /**
     * @var \DateTime
     */
    private $personeria_arrendador_fecha;

    /**
     * @var string
     */
    private $personeria_arrendador_notaria;

    /**
     * @var string
     */
    private $personeria_arrendador_lugar;

    /**
     * @var \DateTime
     */
    private $personeria_arrendatario_fecha;

    /**
     * @var string
     */
    private $personeria_arrendatario_notaria;

    /**
     * @var string
     */
    private $personeria_arrendatario_lugar;


    /**
     * Set arrendador_persona
     *
     * @param string $arrendadorPersona
     * @return Arriendo
     */
    public function setArrendadorPersona($arrendadorPersona)
    {
        $this->arrendador_persona = $arrendadorPersona;

        return $this;
    }

    /**
     * Get arrendador_persona
     *
     * @return string 
     */
    public function getArrendadorPersona()
    {
        return $this->arrendador_persona;
    }

    /**
     * Set arrendador_natural_sexo
     *
     * @param string $arrendadorNaturalSexo
     * @return Arriendo
     */
    public function setArrendadorNaturalSexo($arrendadorNaturalSexo)
    {
        $this->arrendador_natural_sexo = $arrendadorNaturalSexo;

        return $this;
    }

    /**
     * Get arrendador_natural_sexo
     *
     * @return string 
     */
    public function getArrendadorNaturalSexo()
    {
        return $this->arrendador_natural_sexo;
    }

    /**
     * Set arrendador_natural_nombres
     *
     * @param string $arrendadorNaturalNombres
     * @return Arriendo
     */
    public function setArrendadorNaturalNombres($arrendadorNaturalNombres)
    {
        $this->arrendador_natural_nombres = $arrendadorNaturalNombres;

        return $this;
    }

    /**
     * Get arrendador_natural_nombres
     *
     * @return string 
     */
    public function getArrendadorNatural()
    {
        return $this->arrendador_natural_nombres.' '.$this->arrendador_natural_apellido_paterno.' '.$this->arrendador_natural_apellido_materno;
    }
    
    /**
     * Get arrendador_natural_nombres
     *
     * @return string 
     */
    public function getArrendadorNaturalNombres()
    {
        return $this->arrendador_natural_nombres;
    }

    /**
     * Set arrendador_natural_apellido_paterno
     *
     * @param string $arrendadorNaturalApellidoPaterno
     * @return Arriendo
     */
    public function setArrendadorNaturalApellidoPaterno($arrendadorNaturalApellidoPaterno)
    {
        $this->arrendador_natural_apellido_paterno = $arrendadorNaturalApellidoPaterno;

        return $this;
    }

    /**
     * Get arrendador_natural_apellido_paterno
     *
     * @return string 
     */
    public function getArrendadorNaturalApellidoPaterno()
    {
        return $this->arrendador_natural_apellido_paterno;
    }

    /**
     * Set arrendador_natural_apellido_materno
     *
     * @param string $arrendadorNaturalApellidoMaterno
     * @return Arriendo
     */
    public function setArrendadorNaturalApellidoMaterno($arrendadorNaturalApellidoMaterno)
    {
        $this->arrendador_natural_apellido_materno = $arrendadorNaturalApellidoMaterno;

        return $this;
    }

    /**
     * Get arrendador_natural_apellido_materno
     *
     * @return string 
     */
    public function getArrendadorNaturalApellidoMaterno()
    {
        return $this->arrendador_natural_apellido_materno;
    }

    /**
     * Set arrendador_natural_nacionalidad
     *
     * @param string $arrendadorNaturalNacionalidad
     * @return Arriendo
     */
    public function setArrendadorNaturalNacionalidad($arrendadorNaturalNacionalidad)
    {
        $this->arrendador_natural_nacionalidad = $arrendadorNaturalNacionalidad;

        return $this;
    }

    /**
     * Get arrendador_natural_nacionalidad
     *
     * @return string 
     */
    public function getArrendadorNaturalNacionalidad()
    {
        return $this->arrendador_natural_nacionalidad;
    }

    /**
     * Set arrendador_natural_estado_civil
     *
     * @param string $arrendadorNaturalEstadoCivil
     * @return Arriendo
     */
    public function setArrendadorNaturalEstadoCivil($arrendadorNaturalEstadoCivil)
    {
        $this->arrendador_natural_estado_civil = $arrendadorNaturalEstadoCivil;

        return $this;
    }

    /**
     * Get arrendador_natural_estado_civil
     *
     * @return string 
     */
    public function getArrendadorNaturalEstadoCivil()
    {
        return $this->arrendador_natural_estado_civil;
    }

    /**
     * Set arrendador_natural_profesion
     *
     * @param string $arrendadorNaturalProfesion
     * @return Arriendo
     */
    public function setArrendadorNaturalProfesion($arrendadorNaturalProfesion)
    {
        $this->arrendador_natural_profesion = $arrendadorNaturalProfesion;

        return $this;
    }

    /**
     * Get arrendador_natural_profesion
     *
     * @return string 
     */
    public function getArrendadorNaturalProfesion()
    {
        return $this->arrendador_natural_profesion;
    }

    /**
     * Set arrendador_natural_rut
     *
     * @param string $arrendadorNaturalRut
     * @return Arriendo
     */
    public function setArrendadorNaturalRut($arrendadorNaturalRut)
    {
        $this->arrendador_natural_rut = $arrendadorNaturalRut;

        return $this;
    }

    /**
     * Get arrendador_natural_rut
     *
     * @return string 
     */
    public function getArrendadorNaturalRut()
    {
        return $this->arrendador_natural_rut;
    }

    /**
     * Set arrendador_natural_domicilio
     *
     * @param string $arrendadorNaturalDomicilio
     * @return Arriendo
     */
    public function setArrendadorNaturalDomicilio($arrendadorNaturalDomicilio)
    {
        $this->arrendador_natural_domicilio = $arrendadorNaturalDomicilio;

        return $this;
    }

    /**
     * Get arrendador_natural_domicilio
     *
     * @return string 
     */
    public function getArrendadorNaturalDomicilio()
    {
        return $this->arrendador_natural_domicilio;
    }

    /**
     * Set arrendador_natural_comuna
     *
     * @param string $arrendadorNaturalComuna
     * @return Arriendo
     */
    public function setArrendadorNaturalComuna($arrendadorNaturalComuna)
    {
        $this->arrendador_natural_comuna = $arrendadorNaturalComuna;

        return $this;
    }

    /**
     * Get arrendador_natural_comuna
     *
     * @return string 
     */
    public function getArrendadorNaturalComuna()
    {
        return $this->arrendador_natural_comuna;
    }

    /**
     * Set arrendador_natural_region
     *
     * @param string $arrendadorNaturalRegion
     * @return Arriendo
     */
    public function setArrendadorNaturalRegion($arrendadorNaturalRegion)
    {
        $this->arrendador_natural_region = $arrendadorNaturalRegion;

        return $this;
    }

    /**
     * Get arrendador_natural_region
     *
     * @return string 
     */
    public function getArrendadorNaturalRegion()
    {
        return $this->arrendador_natural_region;
    }

    /**
     * Set arrendador_juridica_razon
     *
     * @param string $arrendadorJuridicaRazon
     * @return Arriendo
     */
    public function setArrendadorJuridicaRazon($arrendadorJuridicaRazon)
    {
        $this->arrendador_juridica_razon = $arrendadorJuridicaRazon;

        return $this;
    }

    /**
     * Get arrendador_juridica_razon
     *
     * @return string 
     */
    public function getArrendadorJuridicaRazon()
    {
        return $this->arrendador_juridica_razon;
    }

    /**
     * Set arrendador_juridica_giro
     *
     * @param string $arrendadorJuridicaGiro
     * @return Arriendo
     */
    public function setArrendadorJuridicaGiro($arrendadorJuridicaGiro)
    {
        $this->arrendador_juridica_giro = $arrendadorJuridicaGiro;

        return $this;
    }

    /**
     * Get arrendador_juridica_giro
     *
     * @return string 
     */
    public function getArrendadorJuridicaGiro()
    {
        return $this->arrendador_juridica_giro;
    }

    /**
     * Set arrendador_juridica_rut
     *
     * @param string $arrendadorJuridicaRut
     * @return Arriendo
     */
    public function setArrendadorJuridicaRut($arrendadorJuridicaRut)
    {
        $this->arrendador_juridica_rut = $arrendadorJuridicaRut;

        return $this;
    }

    /**
     * Get arrendador_juridica_rut
     *
     * @return string 
     */
    public function getArrendadorJuridicaRut()
    {
        return $this->arrendador_juridica_rut;
    }

    /**
     * Set arrendador_juridica_domicilio
     *
     * @param string $arrendadorJuridicaDomicilio
     * @return Arriendo
     */
    public function setArrendadorJuridicaDomicilio($arrendadorJuridicaDomicilio)
    {
        $this->arrendador_juridica_domicilio = $arrendadorJuridicaDomicilio;

        return $this;
    }

    /**
     * Get arrendador_juridica_domicilio
     *
     * @return string 
     */
    public function getArrendadorJuridicaDomicilio()
    {
        return $this->arrendador_juridica_domicilio;
    }

    /**
     * Set arrendador_juridica_comuna
     *
     * @param string $arrendadorJuridicaComuna
     * @return Arriendo
     */
    public function setArrendadorJuridicaComuna($arrendadorJuridicaComuna)
    {
        $this->arrendador_juridica_comuna = $arrendadorJuridicaComuna;

        return $this;
    }

    /**
     * Get arrendador_juridica_comuna
     *
     * @return string 
     */
    public function getArrendadorJuridicaComuna()
    {
        return $this->arrendador_juridica_comuna;
    }

    /**
     * Set arrendador_juridica_region
     *
     * @param string $arrendadorJuridicaRegion
     * @return Arriendo
     */
    public function setArrendadorJuridicaRegion($arrendadorJuridicaRegion)
    {
        $this->arrendador_juridica_region = $arrendadorJuridicaRegion;

        return $this;
    }

    /**
     * Get arrendador_juridica_region
     *
     * @return string 
     */
    public function getArrendadorJuridicaRegion()
    {
        return $this->arrendador_juridica_region;
    }

    /**
     * Set arrendatario_persona
     *
     * @param string $arrendatarioPersona
     * @return Arriendo
     */
    public function setArrendatarioPersona($arrendatarioPersona)
    {
        $this->arrendatario_persona = $arrendatarioPersona;

        return $this;
    }

    /**
     * Get arrendatario_persona
     *
     * @return string 
     */
    public function getArrendatarioPersona()
    {
        return $this->arrendatario_persona;
    }

    /**
     * Set arrendatario_natural_sexo
     *
     * @param string $arrendatarioNaturalSexo
     * @return Arriendo
     */
    public function setArrendatarioNaturalSexo($arrendatarioNaturalSexo)
    {
        $this->arrendatario_natural_sexo = $arrendatarioNaturalSexo;

        return $this;
    }

    /**
     * Get arrendatario_natural_sexo
     *
     * @return string 
     */
    public function getArrendatarioNaturalSexo()
    {
        return $this->arrendatario_natural_sexo;
    }

    /**
     * Get arrendador_natural_nombres
     *
     * @return string 
     */
    public function getArrendatarioNatural()
    {
        return $this->arrendatario_natural_nombres.' '.$this->arrendatario_natural_apellido_paterno.' '.$this->arrendatario_natural_apellido_materno;
    }
    
    /**
     * Set arrendatario_natural_nombres
     *
     * @param string $arrendatarioNaturalNombres
     * @return Arriendo
     */
    public function setArrendatarioNaturalNombres($arrendatarioNaturalNombres)
    {
        $this->arrendatario_natural_nombres = $arrendatarioNaturalNombres;

        return $this;
    }

    /**
     * Get arrendatario_natural_nombres
     *
     * @return string 
     */
    public function getArrendatarioNaturalNombres()
    {
        return $this->arrendatario_natural_nombres;
    }

    /**
     * Set arrendatario_natural_apellido_paterno
     *
     * @param string $arrendatarioNaturalApellidoPaterno
     * @return Arriendo
     */
    public function setArrendatarioNaturalApellidoPaterno($arrendatarioNaturalApellidoPaterno)
    {
        $this->arrendatario_natural_apellido_paterno = $arrendatarioNaturalApellidoPaterno;

        return $this;
    }

    /**
     * Get arrendatario_natural_apellido_paterno
     *
     * @return string 
     */
    public function getArrendatarioNaturalApellidoPaterno()
    {
        return $this->arrendatario_natural_apellido_paterno;
    }

    /**
     * Set arrendatario_natural_apellido_materno
     *
     * @param string $arrendatarioNaturalApellidoMaterno
     * @return Arriendo
     */
    public function setArrendatarioNaturalApellidoMaterno($arrendatarioNaturalApellidoMaterno)
    {
        $this->arrendatario_natural_apellido_materno = $arrendatarioNaturalApellidoMaterno;

        return $this;
    }

    /**
     * Get arrendatario_natural_apellido_materno
     *
     * @return string 
     */
    public function getArrendatarioNaturalApellidoMaterno()
    {
        return $this->arrendatario_natural_apellido_materno;
    }

    /**
     * Set arrendatario_natural_nacionalidad
     *
     * @param string $arrendatarioNaturalNacionalidad
     * @return Arriendo
     */
    public function setArrendatarioNaturalNacionalidad($arrendatarioNaturalNacionalidad)
    {
        $this->arrendatario_natural_nacionalidad = $arrendatarioNaturalNacionalidad;

        return $this;
    }

    /**
     * Get arrendatario_natural_nacionalidad
     *
     * @return string 
     */
    public function getArrendatarioNaturalNacionalidad()
    {
        return $this->arrendatario_natural_nacionalidad;
    }

    /**
     * Set arrendatario_natural_estado_civil
     *
     * @param string $arrendatarioNaturalEstadoCivil
     * @return Arriendo
     */
    public function setArrendatarioNaturalEstadoCivil($arrendatarioNaturalEstadoCivil)
    {
        $this->arrendatario_natural_estado_civil = $arrendatarioNaturalEstadoCivil;

        return $this;
    }

    /**
     * Get arrendatario_natural_estado_civil
     *
     * @return string 
     */
    public function getArrendatarioNaturalEstadoCivil()
    {
        return $this->arrendatario_natural_estado_civil;
    }

    /**
     * Set arrendatario_natural_profesion
     *
     * @param string $arrendatarioNaturalProfesion
     * @return Arriendo
     */
    public function setArrendatarioNaturalProfesion($arrendatarioNaturalProfesion)
    {
        $this->arrendatario_natural_profesion = $arrendatarioNaturalProfesion;

        return $this;
    }

    /**
     * Get arrendatario_natural_profesion
     *
     * @return string 
     */
    public function getArrendatarioNaturalProfesion()
    {
        return $this->arrendatario_natural_profesion;
    }

    /**
     * Set arrendatario_natural_rut
     *
     * @param string $arrendatarioNaturalRut
     * @return Arriendo
     */
    public function setArrendatarioNaturalRut($arrendatarioNaturalRut)
    {
        $this->arrendatario_natural_rut = $arrendatarioNaturalRut;

        return $this;
    }

    /**
     * Get arrendatario_natural_rut
     *
     * @return string 
     */
    public function getArrendatarioNaturalRut()
    {
        return $this->arrendatario_natural_rut;
    }

    /**
     * Set arrendatario_natural_domicilio
     *
     * @param string $arrendatarioNaturalDomicilio
     * @return Arriendo
     */
    public function setArrendatarioNaturalDomicilio($arrendatarioNaturalDomicilio)
    {
        $this->arrendatario_natural_domicilio = $arrendatarioNaturalDomicilio;

        return $this;
    }

    /**
     * Get arrendatario_natural_domicilio
     *
     * @return string 
     */
    public function getArrendatarioNaturalDomicilio()
    {
        return $this->arrendatario_natural_domicilio;
    }

    /**
     * Set arrendatario_natural_comuna
     *
     * @param string $arrendatarioNaturalComuna
     * @return Arriendo
     */
    public function setArrendatarioNaturalComuna($arrendatarioNaturalComuna)
    {
        $this->arrendatario_natural_comuna = $arrendatarioNaturalComuna;

        return $this;
    }

    /**
     * Get arrendatario_natural_comuna
     *
     * @return string 
     */
    public function getArrendatarioNaturalComuna()
    {
        return $this->arrendatario_natural_comuna;
    }

    /**
     * Set arrendatario_natural_region
     *
     * @param string $arrendatarioNaturalRegion
     * @return Arriendo
     */
    public function setArrendatarioNaturalRegion($arrendatarioNaturalRegion)
    {
        $this->arrendatario_natural_region = $arrendatarioNaturalRegion;

        return $this;
    }

    /**
     * Get arrendatario_natural_region
     *
     * @return string 
     */
    public function getArrendatarioNaturalRegion()
    {
        return $this->arrendatario_natural_region;
    }

    /**
     * Set arrendatario_juridica_razon
     *
     * @param string $arrendatarioJuridicaRazon
     * @return Arriendo
     */
    public function setArrendatarioJuridicaRazon($arrendatarioJuridicaRazon)
    {
        $this->arrendatario_juridica_razon = $arrendatarioJuridicaRazon;

        return $this;
    }

    /**
     * Get arrendatario_juridica_razon
     *
     * @return string 
     */
    public function getArrendatarioJuridicaRazon()
    {
        return $this->arrendatario_juridica_razon;
    }

    /**
     * Set arrendatario_juridica_giro
     *
     * @param string $arrendatarioJuridicaGiro
     * @return Arriendo
     */
    public function setArrendatarioJuridicaGiro($arrendatarioJuridicaGiro)
    {
        $this->arrendatario_juridica_giro = $arrendatarioJuridicaGiro;

        return $this;
    }

    /**
     * Get arrendatario_juridica_giro
     *
     * @return string 
     */
    public function getArrendatarioJuridicaGiro()
    {
        return $this->arrendatario_juridica_giro;
    }

    /**
     * Set arrendatario_juridica_rut
     *
     * @param string $arrendatarioJuridicaRut
     * @return Arriendo
     */
    public function setArrendatarioJuridicaRut($arrendatarioJuridicaRut)
    {
        $this->arrendatario_juridica_rut = $arrendatarioJuridicaRut;

        return $this;
    }

    /**
     * Get arrendatario_juridica_rut
     *
     * @return string 
     */
    public function getArrendatarioJuridicaRut()
    {
        return $this->arrendatario_juridica_rut;
    }

    /**
     * Set arrendatario_juridica_domicilio
     *
     * @param string $arrendatarioJuridicaDomicilio
     * @return Arriendo
     */
    public function setArrendatarioJuridicaDomicilio($arrendatarioJuridicaDomicilio)
    {
        $this->arrendatario_juridica_domicilio = $arrendatarioJuridicaDomicilio;

        return $this;
    }

    /**
     * Get arrendatario_juridica_domicilio
     *
     * @return string 
     */
    public function getArrendatarioJuridicaDomicilio()
    {
        return $this->arrendatario_juridica_domicilio;
    }

    /**
     * Set arrendatario_juridica_comuna
     *
     * @param string $arrendatarioJuridicaComuna
     * @return Arriendo
     */
    public function setArrendatarioJuridicaComuna($arrendatarioJuridicaComuna)
    {
        $this->arrendatario_juridica_comuna = $arrendatarioJuridicaComuna;

        return $this;
    }

    /**
     * Get arrendatario_juridica_comuna
     *
     * @return string 
     */
    public function getArrendatarioJuridicaComuna()
    {
        return $this->arrendatario_juridica_comuna;
    }

    /**
     * Set arrendatario_juridica_region
     *
     * @param string $arrendatarioJuridicaRegion
     * @return Arriendo
     */
    public function setArrendatarioJuridicaRegion($arrendatarioJuridicaRegion)
    {
        $this->arrendatario_juridica_region = $arrendatarioJuridicaRegion;

        return $this;
    }

    /**
     * Get arrendatario_juridica_region
     *
     * @return string 
     */
    public function getArrendatarioJuridicaRegion()
    {
        return $this->arrendatario_juridica_region;
    }

    /**
     * Set propiedad_calle
     *
     * @param string $propiedadCalle
     * @return Arriendo
     */
    public function setPropiedadCalle($propiedadCalle)
    {
        $this->propiedad_calle = $propiedadCalle;

        return $this;
    }

    /**
     * Get propiedad_calle
     *
     * @return string 
     */
    public function getPropiedadCalle()
    {
        return $this->propiedad_calle;
    }

    /**
     * Set propiedad_numero
     *
     * @param string $propiedadNumero
     * @return Arriendo
     */
    public function setPropiedadNumero($propiedadNumero)
    {
        $this->propiedad_numero = $propiedadNumero;

        return $this;
    }

    /**
     * Get propiedad_numero
     *
     * @return string 
     */
    public function getPropiedadNumero()
    {
        return $this->propiedad_numero;
    }

    /**
     * Set propiedad_departamento
     *
     * @param string $propiedadDepartamento
     * @return Arriendo
     */
    public function setPropiedadDepartamento($propiedadDepartamento)
    {
        $this->propiedad_departamento = $propiedadDepartamento;

        return $this;
    }

    /**
     * Get propiedad_departamento
     *
     * @return string 
     */
    public function getPropiedadDepartamento()
    {
        return $this->propiedad_departamento;
    }

    /**
     * Set propiedad_villa
     *
     * @param string $propiedadVilla
     * @return Arriendo
     */
    public function setPropiedadVilla($propiedadVilla)
    {
        $this->propiedad_villa = $propiedadVilla;

        return $this;
    }

    /**
     * Get propiedad_villa
     *
     * @return string 
     */
    public function getPropiedadVilla()
    {
        return $this->propiedad_villa;
    }

    /**
     * Set propiedad_region
     *
     * @param string $propiedadRegion
     * @return Arriendo
     */
    public function setPropiedadRegion($propiedadRegion)
    {
        $this->propiedad_region = $propiedadRegion;

        return $this;
    }

    /**
     * Get propiedad_region
     *
     * @return string 
     */
    public function getPropiedadRegion()
    {
        return $this->propiedad_region;
    }

    /**
     * Set propiedad_comuna
     *
     * @param string $propiedadComuna
     * @return Arriendo
     */
    public function setPropiedadComuna($propiedadComuna)
    {
        $this->propiedad_comuna = $propiedadComuna;

        return $this;
    }

    /**
     * Get propiedad_comuna
     *
     * @return string 
     */
    public function getPropiedadComuna()
    {
        return $this->propiedad_comuna;
    }

    /**
     * Set plazo_unidad
     *
     * @param string $plazoUnidad
     * @return Arriendo
     */
    public function setPlazoUnidad($plazoUnidad)
    {
        $this->plazo_unidad = $plazoUnidad;

        return $this;
    }

    /**
     * Get plazo_unidad
     *
     * @return string 
     */
    public function getPlazoUnidad()
    {
        return $this->plazo_unidad;
    }

    /**
     * Set plazo_momento
     *
     * @param string $plazoMomento
     * @return Arriendo
     */
    public function setPlazoMomento($plazoMomento)
    {
        $this->plazo_momento = $plazoMomento;

        return $this;
    }

    /**
     * Get plazo_momento
     *
     * @return string 
     */
    public function getPlazoMomento()
    {
        return $this->plazo_momento;
    }

    /**
     * Set plazo_prorroga
     *
     * @param string $plazoProrroga
     * @return Arriendo
     */
    public function setPlazoProrroga($plazoProrroga)
    {
        $this->plazo_prorroga = $plazoProrroga;

        return $this;
    }

    /**
     * Get plazo_prorroga
     *
     * @return string 
     */
    public function getPlazoProrroga()
    {
        return $this->plazo_prorroga;
    }

    /**
     * Set plazo_prorroga_tiempo
     *
     * @param string $plazoProrrogaTiempo
     * @return Arriendo
     */
    public function setPlazoProrrogaTiempo($plazoProrrogaTiempo)
    {
        $this->plazo_prorroga_tiempo = $plazoProrrogaTiempo;

        return $this;
    }

    /**
     * Get plazo_prorroga_tiempo
     *
     * @return string 
     */
    public function getPlazoProrrogaTiempo()
    {
        return $this->plazo_prorroga_tiempo;
    }

    /**
     * Set plazo_aviso
     *
     * @param string $plazoAviso
     * @return Arriendo
     */
    public function setPlazoAviso($plazoAviso)
    {
        $this->plazo_aviso = $plazoAviso;

        return $this;
    }

    /**
     * Get plazo_aviso
     *
     * @return string 
     */
    public function getPlazoAviso()
    {
        return $this->plazo_aviso;
    }

    /**
     * Set plazo_forma
     *
     * @param string $plazoForma
     * @return Arriendo
     */
    public function setPlazoForma($plazoForma)
    {
        $this->plazo_forma = $plazoForma;

        return $this;
    }

    /**
     * Get plazo_forma
     *
     * @return string 
     */
    public function getPlazoForma()
    {
        return $this->plazo_forma;
    }

    /**
     * Set plazo_carta
     *
     * @param string $plazoCarta
     * @return Arriendo
     */
    public function setPlazoCarta($plazoCarta)
    {
        $this->plazo_carta = $plazoCarta;

        return $this;
    }

    /**
     * Get plazo_carta
     *
     * @return string 
     */
    public function getPlazoCarta()
    {
        return $this->plazo_carta;
    }

    /**
     * Set renta_monto
     *
     * @param string $rentaMonto
     * @return Arriendo
     */
    public function setRentaMonto($rentaMonto)
    {
        $this->renta_monto = $rentaMonto;

        return $this;
    }

    /**
     * Get renta_monto
     *
     * @return string 
     */
    public function getRentaMonto()
    {
        return $this->renta_monto;
    }

    /**
     * Set renta_unidad
     *
     * @param string $rentaUnidad
     * @return Arriendo
     */
    public function setRentaUnidad($rentaUnidad)
    {
        $this->renta_unidad = $rentaUnidad;

        return $this;
    }

    /**
     * Get renta_unidad
     *
     * @return string 
     */
    public function getRentaUnidad()
    {
        return $this->renta_unidad;
    }

    /**
     * Set renta_periodo
     *
     * @param string $rentaPeriodo
     * @return Arriendo
     */
    public function setRentaPeriodo($rentaPeriodo)
    {
        $this->renta_periodo = $rentaPeriodo;

        return $this;
    }

    /**
     * Get renta_periodo
     *
     * @return string 
     */
    public function getRentaPeriodo()
    {
        return $this->renta_periodo;
    }

    /**
     * Set renta_tiempo
     *
     * @param string $rentaTiempo
     * @return Arriendo
     */
    public function setRentaTiempo($rentaTiempo)
    {
        $this->renta_tiempo = $rentaTiempo;

        return $this;
    }

    /**
     * Get renta_tiempo
     *
     * @return string 
     */
    public function getRentaTiempo()
    {
        return $this->renta_tiempo;
    }

    /**
     * Set renta_dias
     *
     * @param string $rentaDias
     * @return Arriendo
     */
    public function setRentaDias($rentaDias)
    {
        $this->renta_dias = $rentaDias;

        return $this;
    }

    /**
     * Get renta_dias
     *
     * @return string 
     */
    public function getRentaDias()
    {
        return $this->renta_dias;
    }

    /**
     * Set renta_medio_pago
     *
     * @param string $rentaMedioPago
     * @return Arriendo
     */
    public function setRentaMedioPago($rentaMedioPago)
    {
        $this->renta_medio_pago = $rentaMedioPago;

        return $this;
    }

    /**
     * Get renta_medio_pago
     *
     * @return string 
     */
    public function getRentaMedioPago()
    {
        return $this->renta_medio_pago;
    }

    /**
     * Set renta_medio_efectivo
     *
     * @param string $rentaMedioEfectivo
     * @return Arriendo
     */
    public function setRentaMedioEfectivo($rentaMedioEfectivo)
    {
        $this->renta_medio_efectivo = $rentaMedioEfectivo;

        return $this;
    }

    /**
     * Get renta_medio_efectivo
     *
     * @return string 
     */
    public function getRentaMedioEfectivo()
    {
        return $this->renta_medio_efectivo;
    }

    /**
     * Set renta_medio_cheque
     *
     * @param string $rentaMedioCheque
     * @return Arriendo
     */
    public function setRentaMedioCheque($rentaMedioCheque)
    {
        $this->renta_medio_cheque = $rentaMedioCheque;

        return $this;
    }

    /**
     * Get renta_medio_cheque
     *
     * @return string 
     */
    public function getRentaMedioCheque()
    {
        return $this->renta_medio_cheque;
    }

    /**
     * Set renta_medio_deposito_titular
     *
     * @param string $rentaMedioDepositoTitular
     * @return Arriendo
     */
    public function setRentaMedioDepositoTitular($rentaMedioDepositoTitular)
    {
        $this->renta_medio_deposito_titular = $rentaMedioDepositoTitular;

        return $this;
    }

    /**
     * Get renta_medio_deposito_titular
     *
     * @return string 
     */
    public function getRentaMedioDepositoTitular()
    {
        return $this->renta_medio_deposito_titular;
    }

    /**
     * Set renta_medio_deposito_tipo
     *
     * @param string $rentaMedioDepositoTipo
     * @return Arriendo
     */
    public function setRentaMedioDepositoTipo($rentaMedioDepositoTipo)
    {
        $this->renta_medio_deposito_tipo = $rentaMedioDepositoTipo;

        return $this;
    }

    /**
     * Get renta_medio_deposito_tipo
     *
     * @return string 
     */
    public function getRentaMedioDepositoTipo()
    {
        return $this->renta_medio_deposito_tipo;
    }

    /**
     * Set renta_medio_deposito_numero
     *
     * @param string $rentaMedioDepositoNumero
     * @return Arriendo
     */
    public function setRentaMedioDepositoNumero($rentaMedioDepositoNumero)
    {
        $this->renta_medio_deposito_numero = $rentaMedioDepositoNumero;

        return $this;
    }

    /**
     * Get renta_medio_deposito_numero
     *
     * @return string 
     */
    public function getRentaMedioDepositoNumero()
    {
        return $this->renta_medio_deposito_numero;
    }

    /**
     * Set renta_medio_deposito_banco
     *
     * @param string $rentaMedioDepositoBanco
     * @return Arriendo
     */
    public function setRentaMedioDepositoBanco($rentaMedioDepositoBanco)
    {
        $this->renta_medio_deposito_banco = $rentaMedioDepositoBanco;

        return $this;
    }

    /**
     * Get renta_medio_deposito_banco
     *
     * @return string 
     */
    public function getRentaMedioDepositoBanco()
    {
        return $this->renta_medio_deposito_banco;
    }

    /**
     * Set renta_medio_deposito_envio
     *
     * @param string $rentaMedioDepositoEnvio
     * @return Arriendo
     */
    public function setRentaMedioDepositoEnvio($rentaMedioDepositoEnvio)
    {
        $this->renta_medio_deposito_envio = $rentaMedioDepositoEnvio;

        return $this;
    }

    /**
     * Get renta_medio_deposito_envio
     *
     * @return string 
     */
    public function getRentaMedioDepositoEnvio()
    {
        return $this->renta_medio_deposito_envio;
    }

    /**
     * Set renta_medio_reajuste
     *
     * @param string $rentaMedioReajuste
     * @return Arriendo
     */
    public function setRentaMedioReajuste($rentaMedioReajuste)
    {
        $this->renta_medio_reajuste = $rentaMedioReajuste;

        return $this;
    }

    /**
     * Get renta_medio_reajuste
     *
     * @return string 
     */
    public function getRentaMedioReajuste()
    {
        return $this->renta_medio_reajuste;
    }

    /**
     * Set renta_reajuste_periodo
     *
     * @param string $rentaReajustePeriodo
     * @return Arriendo
     */
    public function setRentaReajustePeriodo($rentaReajustePeriodo)
    {
        $this->renta_reajuste_periodo = $rentaReajustePeriodo;

        return $this;
    }

    /**
     * Get renta_reajuste_periodo
     *
     * @return string 
     */
    public function getRentaReajustePeriodo()
    {
        return $this->renta_reajuste_periodo;
    }

    /**
     * Set renta_reajuste_forma
     *
     * @param string $rentaReajusteForma
     * @return Arriendo
     */
    public function setRentaReajusteForma($rentaReajusteForma)
    {
        $this->renta_reajuste_forma = $rentaReajusteForma;

        return $this;
    }

    /**
     * Get renta_reajuste_forma
     *
     * @return string 
     */
    public function getRentaReajusteForma()
    {
        return $this->renta_reajuste_forma;
    }

    /**
     * Set renta_mora_sancion
     *
     * @param string $rentaMoraSancion
     * @return Arriendo
     */
    public function setRentaMoraSancion($rentaMoraSancion)
    {
        $this->renta_mora_sancion = $rentaMoraSancion;

        return $this;
    }

    /**
     * Get renta_mora_sancion
     *
     * @return string 
     */
    public function getRentaMoraSancion()
    {
        return $this->renta_mora_sancion;
    }

    /**
     * Set renta_mora_periodo
     *
     * @param string $rentaMoraPeriodo
     * @return Arriendo
     */
    public function setRentaMoraPeriodo($rentaMoraPeriodo)
    {
        $this->renta_mora_periodo = $rentaMoraPeriodo;

        return $this;
    }

    /**
     * Get renta_mora_periodo
     *
     * @return string 
     */
    public function getRentaMoraPeriodo()
    {
        return $this->renta_mora_periodo;
    }

    /**
     * Set renta_mora_valor
     *
     * @param string $rentaMoraValor
     * @return Arriendo
     */
    public function setRentaMoraValor($rentaMoraValor)
    {
        $this->renta_mora_valor = $rentaMoraValor;

        return $this;
    }

    /**
     * Get renta_mora_valor
     *
     * @return string 
     */
    public function getRentaMoraValor()
    {
        return $this->renta_mora_valor;
    }

    /**
     * Set renta_cobranza
     *
     * @param string $rentaCobranza
     * @return Arriendo
     */
    public function setRentaCobranza($rentaCobranza)
    {
        $this->renta_cobranza = $rentaCobranza;

        return $this;
    }

    /**
     * Get renta_cobranza
     *
     * @return string 
     */
    public function getRentaCobranza()
    {
        return $this->renta_cobranza;
    }

    /**
     * Set renta_cobranza_plazo
     *
     * @param string $rentaCobranzaPlazo
     * @return Arriendo
     */
    public function setRentaCobranzaPlazo($rentaCobranzaPlazo)
    {
        $this->renta_cobranza_plazo = $rentaCobranzaPlazo;

        return $this;
    }

    /**
     * Get renta_cobranza_plazo
     *
     * @return string 
     */
    public function getRentaCobranzaPlazo()
    {
        return $this->renta_cobranza_plazo;
    }

    /**
     * Set renta_cobranza_notificacion
     *
     * @param string $rentaCobranzaNotificacion
     * @return Arriendo
     */
    public function setRentaCobranzaNotificacion($rentaCobranzaNotificacion)
    {
        $this->renta_cobranza_notificacion = $rentaCobranzaNotificacion;

        return $this;
    }

    /**
     * Get renta_cobranza_notificacion
     *
     * @return string 
     */
    public function getRentaCobranzaNotificacion()
    {
        return $this->renta_cobranza_notificacion;
    }

    /**
     * Set renta_cobranza_avaluo
     *
     * @param string $rentaCobranzaAvaluo
     * @return Arriendo
     */
    public function setRentaCobranzaAvaluo($rentaCobranzaAvaluo)
    {
        $this->renta_cobranza_avaluo = $rentaCobranzaAvaluo;

        return $this;
    }

    /**
     * Get renta_cobranza_avaluo
     *
     * @return string 
     */
    public function getRentaCobranzaAvaluo()
    {
        return $this->renta_cobranza_avaluo;
    }

    /**
     * Set entrega_fecha
     *
     * @param string $entregaFecha
     * @return Arriendo
     */
    public function setEntregaFecha($entregaFecha)
    {
        $this->entrega_fecha = $entregaFecha;

        return $this;
    }

    /**
     * Get entrega_fecha
     *
     * @return string 
     */
    public function getEntregaFecha()
    {
        return $this->entrega_fecha;
    }

    /**
     * Set entrega_inventario
     *
     * @param string $entregaInventario
     * @return Arriendo
     */
    public function setEntregaInventario($entregaInventario)
    {
        $this->entrega_inventario = $entregaInventario;

        return $this;
    }

    /**
     * Get entrega_inventario
     *
     * @return string 
     */
    public function getEntregaInventario()
    {
        return $this->entrega_inventario;
    }

    /**
     * Set restitucion_forma
     *
     * @param string $restitucionForma
     * @return Arriendo
     */
    public function setRestitucionForma($restitucionForma)
    {
        $this->restitucion_forma = $restitucionForma;

        return $this;
    }

    /**
     * Get restitucion_forma
     *
     * @return string 
     */
    public function getRestitucionForma()
    {
        return $this->restitucion_forma;
    }

    /**
     * Set restitucion_acreditacion
     *
     * @param string $restitucionAcreditacion
     * @return Arriendo
     */
    public function setRestitucionAcreditacion($restitucionAcreditacion)
    {
        $this->restitucion_acreditacion = $restitucionAcreditacion;

        return $this;
    }

    /**
     * Get restitucion_acreditacion
     *
     * @return string 
     */
    public function getRestitucionAcreditacion()
    {
        return $this->restitucion_acreditacion;
    }

    /**
     * Set restitucion_visita_plazo
     *
     * @param string $restitucionVisitaPlazo
     * @return Arriendo
     */
    public function setRestitucionVisitaPlazo($restitucionVisitaPlazo)
    {
        $this->restitucion_visita_plazo = $restitucionVisitaPlazo;

        return $this;
    }

    /**
     * Get restitucion_visita_plazo
     *
     * @return string 
     */
    public function getRestitucionVisitaPlazo()
    {
        return $this->restitucion_visita_plazo;
    }

    /**
     * Set restitucion_visita_unidad
     *
     * @param string $restitucionVisitaUnidad
     * @return Arriendo
     */
    public function setRestitucionVisitaUnidad($restitucionVisitaUnidad)
    {
        $this->restitucion_visita_unidad = $restitucionVisitaUnidad;

        return $this;
    }

    /**
     * Get restitucion_visita_unidad
     *
     * @return string 
     */
    public function getRestitucionVisitaUnidad()
    {
        return $this->restitucion_visita_unidad;
    }

    /**
     * Set restitucion_inicio_plazo
     *
     * @param string $restitucionInicioPlazo
     * @return Arriendo
     */
    public function setRestitucionInicioPlazo($restitucionInicioPlazo)
    {
        $this->restitucion_inicio_plazo = $restitucionInicioPlazo;

        return $this;
    }

    /**
     * Get restitucion_inicio_plazo
     *
     * @return string 
     */
    public function getRestitucionInicioPlazo()
    {
        return $this->restitucion_inicio_plazo;
    }

    /**
     * Set restitucion_inicio_unidad
     *
     * @param string $restitucionInicioUnidad
     * @return Arriendo
     */
    public function setRestitucionInicioUnidad($restitucionInicioUnidad)
    {
        $this->restitucion_inicio_unidad = $restitucionInicioUnidad;

        return $this;
    }

    /**
     * Get restitucion_inicio_unidad
     *
     * @return string 
     */
    public function getRestitucionInicioUnidad()
    {
        return $this->restitucion_inicio_unidad;
    }

    /**
     * Set prohibicion_subarriendo
     *
     * @param boolean $prohibicionSubarriendo
     * @return Arriendo
     */
    public function setProhibicionSubarriendo($prohibicionSubarriendo)
    {
        $this->prohibicion_subarriendo = $prohibicionSubarriendo;

        return $this;
    }

    /**
     * Get prohibicion_subarriendo
     *
     * @return boolean 
     */
    public function getProhibicionSubarriendo()
    {
        return $this->prohibicion_subarriendo;
    }

    /**
     * Set prohibicion_variaciones
     *
     * @param boolean $prohibicionVariaciones
     * @return Arriendo
     */
    public function setProhibicionVariaciones($prohibicionVariaciones)
    {
        $this->prohibicion_variaciones = $prohibicionVariaciones;

        return $this;
    }

    /**
     * Get prohibicion_variaciones
     *
     * @return boolean 
     */
    public function getProhibicionVariaciones()
    {
        return $this->prohibicion_variaciones;
    }

    /**
     * Set prohibicion_utilizacion
     *
     * @param boolean $prohibicionUtilizacion
     * @return Arriendo
     */
    public function setProhibicionUtilizacion($prohibicionUtilizacion)
    {
        $this->prohibicion_utilizacion = $prohibicionUtilizacion;

        return $this;
    }

    /**
     * Get prohibicion_utilizacion
     *
     * @return boolean 
     */
    public function getProhibicionUtilizacion()
    {
        return $this->prohibicion_utilizacion;
    }

    /**
     * Set prohibicion_retraso
     *
     * @param boolean $prohibicionRetraso
     * @return Arriendo
     */
    public function setProhibicionRetraso($prohibicionRetraso)
    {
        $this->prohibicion_retraso = $prohibicionRetraso;

        return $this;
    }

    /**
     * Get prohibicion_retraso
     *
     * @return boolean 
     */
    public function getProhibicionRetraso()
    {
        return $this->prohibicion_retraso;
    }

    /**
     * Set prohibicion_perturbacion
     *
     * @param boolean $prohibicionPerturbacion
     * @return Arriendo
     */
    public function setProhibicionPerturbacion($prohibicionPerturbacion)
    {
        $this->prohibicion_perturbacion = $prohibicionPerturbacion;

        return $this;
    }

    /**
     * Get prohibicion_perturbacion
     *
     * @return boolean 
     */
    public function getProhibicionPerturbacion()
    {
        return $this->prohibicion_perturbacion;
    }

    /**
     * Set prohibicion_agujeros
     *
     * @param boolean $prohibicionAgujeros
     * @return Arriendo
     */
    public function setProhibicionAgujeros($prohibicionAgujeros)
    {
        $this->prohibicion_agujeros = $prohibicionAgujeros;

        return $this;
    }

    /**
     * Get prohibicion_agujeros
     *
     * @return boolean 
     */
    public function getProhibicionAgujeros()
    {
        return $this->prohibicion_agujeros;
    }

    /**
     * Set prohibicion_normativa
     *
     * @param boolean $prohibicionNormativa
     * @return Arriendo
     */
    public function setProhibicionNormativa($prohibicionNormativa)
    {
        $this->prohibicion_normativa = $prohibicionNormativa;

        return $this;
    }

    /**
     * Get prohibicion_normativa
     *
     * @return boolean 
     */
    public function getProhibicionNormativa()
    {
        return $this->prohibicion_normativa;
    }

    /**
     * Set prohibicion_accion_ilegal
     *
     * @param boolean $prohibicionAccionIlegal
     * @return Arriendo
     */
    public function setProhibicionAccionIlegal($prohibicionAccionIlegal)
    {
        $this->prohibicion_accion_ilegal = $prohibicionAccionIlegal;

        return $this;
    }

    /**
     * Get prohibicion_accion_ilegal
     *
     * @return boolean 
     */
    public function getProhibicionAccionIlegal()
    {
        return $this->prohibicion_accion_ilegal;
    }

    /**
     * Set recision_pago
     *
     * @param string $recisionPago
     * @return Arriendo
     */
    public function setRecisionPago($recisionPago)
    {
        $this->recision_pago = $recisionPago;

        return $this;
    }

    /**
     * Get recision_pago
     *
     * @return string 
     */
    public function getRecisionPago()
    {
        return $this->recision_pago;
    }

    /**
     * Set recision_unidad
     *
     * @param string $recisionUnidad
     * @return Arriendo
     */
    public function setRecisionUnidad($recisionUnidad)
    {
        $this->recision_unidad = $recisionUnidad;

        return $this;
    }

    /**
     * Get recision_unidad
     *
     * @return string 
     */
    public function getRecisionUnidad()
    {
        return $this->recision_unidad;
    }

    /**
     * Set recision_causal
     *
     * @param boolean $recisionCausal
     * @return Arriendo
     */
    public function setRecisionCausal($recisionCausal)
    {
        $this->recision_causal = $recisionCausal;

        return $this;
    }

    /**
     * Get recision_causal
     *
     * @return boolean 
     */
    public function getRecisionCausal()
    {
        return $this->recision_causal;
    }

    /**
     * Set recision_causal_descripcion
     *
     * @param string $recisionCausalDescripcion
     * @return Arriendo
     */
    public function setRecisionCausalDescripcion($recisionCausalDescripcion)
    {
        $this->recision_causal_descripcion = $recisionCausalDescripcion;

        return $this;
    }

    /**
     * Get recision_causal_descripcion
     *
     * @return string 
     */
    public function getRecisionCausalDescripcion()
    {
        return $this->recision_causal_descripcion;
    }

    /**
     * Set recision_unilateral
     *
     * @param boolean $recisionUnilateral
     * @return Arriendo
     */
    public function setRecisionUnilateral($recisionUnilateral)
    {
        $this->recision_unilateral = $recisionUnilateral;

        return $this;
    }

    /**
     * Get recision_unilateral
     *
     * @return boolean 
     */
    public function getRecisionUnilateral()
    {
        return $this->recision_unilateral;
    }

    /**
     * Set recision_unilateral_anticipacion
     *
     * @param string $recisionUnilateralAnticipacion
     * @return Arriendo
     */
    public function setRecisionUnilateralAnticipacion($recisionUnilateralAnticipacion)
    {
        $this->recision_unilateral_anticipacion = $recisionUnilateralAnticipacion;

        return $this;
    }

    /**
     * Get recision_unilateral_anticipacion
     *
     * @return string 
     */
    public function getRecisionUnilateralAnticipacion()
    {
        return $this->recision_unilateral_anticipacion;
    }

    /**
     * Set recision_unilateral_unidad
     *
     * @param string $recisionUnilateralUnidad
     * @return Arriendo
     */
    public function setRecisionUnilateralUnidad($recisionUnilateralUnidad)
    {
        $this->recision_unilateral_unidad = $recisionUnilateralUnidad;

        return $this;
    }

    /**
     * Get recision_unilateral_unidad
     *
     * @return string 
     */
    public function getRecisionUnilateralUnidad()
    {
        return $this->recision_unilateral_unidad;
    }

    /**
     * Set recision_unilateral_forma
     *
     * @param string $recisionUnilateralForma
     * @return Arriendo
     */
    public function setRecisionUnilateralForma($recisionUnilateralForma)
    {
        $this->recision_unilateral_forma = $recisionUnilateralForma;

        return $this;
    }

    /**
     * Get recision_unilateral_forma
     *
     * @return string 
     */
    public function getRecisionUnilateralForma()
    {
        return $this->recision_unilateral_forma;
    }

    /**
     * Set garantia_deposito
     *
     * @param boolean $garantiaDeposito
     * @return Arriendo
     */
    public function setGarantiaDeposito($garantiaDeposito)
    {
        $this->garantia_deposito = $garantiaDeposito;

        return $this;
    }

    /**
     * Get garantia_deposito
     *
     * @return boolean 
     */
    public function getGarantiaDeposito()
    {
        return $this->garantia_deposito;
    }

    /**
     * Set garantia_forma
     *
     * @param string $garantiaForma
     * @return Arriendo
     */
    public function setGarantiaForma($garantiaForma)
    {
        $this->garantia_forma = $garantiaForma;

        return $this;
    }

    /**
     * Get garantia_forma
     *
     * @return string 
     */
    public function getGarantiaForma()
    {
        return $this->garantia_forma;
    }

    /**
     * Set garantia_monto
     *
     * @param string $garantiaMonto
     * @return Arriendo
     */
    public function setGarantiaMonto($garantiaMonto)
    {
        $this->garantia_monto = $garantiaMonto;

        return $this;
    }

    /**
     * Get garantia_monto
     *
     * @return string 
     */
    public function getGarantiaMonto()
    {
        return $this->garantia_monto;
    }

    /**
     * Set garantia_dias_terminado
     *
     * @param string $garantiaDiasTerminado
     * @return Arriendo
     */
    public function setGarantiaDiasTerminado($garantiaDiasTerminado)
    {
        $this->garantia_dias_terminado = $garantiaDiasTerminado;

        return $this;
    }

    /**
     * Get garantia_dias_terminado
     *
     * @return string 
     */
    public function getGarantiaDiasTerminado()
    {
        return $this->garantia_dias_terminado;
    }

    /**
     * Set garantia_dias_pagado
     *
     * @param string $garantiaDiasPagado
     * @return Arriendo
     */
    public function setGarantiaDiasPagado($garantiaDiasPagado)
    {
        $this->garantia_dias_pagado = $garantiaDiasPagado;

        return $this;
    }

    /**
     * Get garantia_dias_pagado
     *
     * @return string 
     */
    public function getGarantiaDiasPagado()
    {
        return $this->garantia_dias_pagado;
    }

    /**
     * Set garantia_unidad
     *
     * @param string $garantiaUnidad
     * @return Arriendo
     */
    public function setGarantiaUnidad($garantiaUnidad)
    {
        $this->garantia_unidad = $garantiaUnidad;

        return $this;
    }

    /**
     * Get garantia_unidad
     *
     * @return string 
     */
    public function getGarantiaUnidad()
    {
        return $this->garantia_unidad;
    }

    /**
     * Set aval
     *
     * @param boolean $aval
     * @return Arriendo
     */
    public function setAval($aval)
    {
        $this->aval = $aval;

        return $this;
    }

    /**
     * Get aval
     *
     * @return boolean 
     */
    public function getAval()
    {
        return $this->aval;
    }

    /**
     * Set aval_sexo
     *
     * @param string $avalSexo
     * @return Arriendo
     */
    public function setAvalSexo($avalSexo)
    {
        $this->aval_sexo = $avalSexo;

        return $this;
    }

    /**
     * Get aval_sexo
     *
     * @return string 
     */
    public function getAvalSexo()
    {
        return $this->aval_sexo;
    }

    /**
     * Set aval_nombres
     *
     * @param string $avalNombres
     * @return Arriendo
     */
    public function setAvalNombres($avalNombres)
    {
        $this->aval_nombres = $avalNombres;

        return $this;
    }

    /**
     * Get aval_nombres
     *
     * @return string 
     */
    public function getAvalNombres()
    {
        return $this->aval_nombres;
    }

    /**
     * Set aval_apellido_paterno
     *
     * @param string $avalApellidoPaterno
     * @return Arriendo
     */
    public function setAvalApellidoPaterno($avalApellidoPaterno)
    {
        $this->aval_apellido_paterno = $avalApellidoPaterno;

        return $this;
    }

    /**
     * Get aval_apellido_paterno
     *
     * @return string 
     */
    public function getAvalApellidoPaterno()
    {
        return $this->aval_apellido_paterno;
    }

    /**
     * Set aval_apellido_materno
     *
     * @param string $avalApellidoMaterno
     * @return Arriendo
     */
    public function setAvalApellidoMaterno($avalApellidoMaterno)
    {
        $this->aval_apellido_materno = $avalApellidoMaterno;

        return $this;
    }

    /**
     * Get aval_apellido_materno
     *
     * @return string 
     */
    public function getAvalApellidoMaterno()
    {
        return $this->aval_apellido_materno;
    }

    /**
     * Set aval_nacionalidad
     *
     * @param string $avalNacionalidad
     * @return Arriendo
     */
    public function setAvalNacionalidad($avalNacionalidad)
    {
        $this->aval_nacionalidad = $avalNacionalidad;

        return $this;
    }

    /**
     * Get aval_nacionalidad
     *
     * @return string 
     */
    public function getAvalNacionalidad()
    {
        return $this->aval_nacionalidad;
    }

    /**
     * Set aval_estado_civil
     *
     * @param string $avalEstadoCivil
     * @return Arriendo
     */
    public function setAvalEstadoCivil($avalEstadoCivil)
    {
        $this->aval_estado_civil = $avalEstadoCivil;

        return $this;
    }

    /**
     * Get aval_estado_civil
     *
     * @return string 
     */
    public function getAvalEstadoCivil()
    {
        return $this->aval_estado_civil;
    }

    /**
     * Set aval_profesion
     *
     * @param string $avalProfesion
     * @return Arriendo
     */
    public function setAvalProfesion($avalProfesion)
    {
        $this->aval_profesion = $avalProfesion;

        return $this;
    }

    /**
     * Get aval_profesion
     *
     * @return string 
     */
    public function getAvalProfesion()
    {
        return $this->aval_profesion;
    }

    /**
     * Set aval_rut
     *
     * @param string $avalRut
     * @return Arriendo
     */
    public function setAvalRut($avalRut)
    {
        $this->aval_rut = $avalRut;

        return $this;
    }

    /**
     * Get aval_rut
     *
     * @return string 
     */
    public function getAvalRut()
    {
        return $this->aval_rut;
    }

    /**
     * Set aval_domicilio
     *
     * @param string $avalDomicilio
     * @return Arriendo
     */
    public function setAvalDomicilio($avalDomicilio)
    {
        $this->aval_domicilio = $avalDomicilio;

        return $this;
    }

    /**
     * Get aval_domicilio
     *
     * @return string 
     */
    public function getAvalDomicilio()
    {
        return $this->aval_domicilio;
    }

    /**
     * Set aval_comuna
     *
     * @param string $avalComuna
     * @return Arriendo
     */
    public function setAvalComuna($avalComuna)
    {
        $this->aval_comuna = $avalComuna;

        return $this;
    }

    /**
     * Get aval_comuna
     *
     * @return string 
     */
    public function getAvalComuna()
    {
        return $this->aval_comuna;
    }

    /**
     * Set aval_region
     *
     * @param string $avalRegion
     * @return Arriendo
     */
    public function setAvalRegion($avalRegion)
    {
        $this->aval_region = $avalRegion;

        return $this;
    }

    /**
     * Get aval_region
     *
     * @return string 
     */
    public function getAvalRegion()
    {
        return $this->aval_region;
    }

    /**
     * Set correo
     *
     * @param boolean $correo
     * @return Arriendo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return boolean 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set correo_arrendador
     *
     * @param string $correoArrendador
     * @return Arriendo
     */
    public function setCorreoArrendador($correoArrendador)
    {
        $this->correo_arrendador = $correoArrendador;

        return $this;
    }

    /**
     * Get correo_arrendador
     *
     * @return string 
     */
    public function getCorreoArrendador()
    {
        return $this->correo_arrendador;
    }

    /**
     * Set correo_arrendatario
     *
     * @param string $correoArrendatario
     * @return Arriendo
     */
    public function setCorreoArrendatario($correoArrendatario)
    {
        $this->correo_arrendatario = $correoArrendatario;

        return $this;
    }

    /**
     * Get correo_arrendatario
     *
     * @return string 
     */
    public function getCorreoArrendatario()
    {
        return $this->correo_arrendatario;
    }

    /**
     * Set personeria_arrendador_fecha
     *
     * @param \DateTime $personeriaArrendadorFecha
     * @return Arriendo
     */
    public function setPersoneriaArrendadorFecha($personeriaArrendadorFecha)
    {
        $this->personeria_arrendador_fecha = $personeriaArrendadorFecha;

        return $this;
    }

    /**
     * Get personeria_arrendador_fecha
     *
     * @return \DateTime 
     */
    public function getPersoneriaArrendadorFecha()
    {
        return $this->personeria_arrendador_fecha;
    }

    /**
     * Set personeria_arrendador_notaria
     *
     * @param string $personeriaArrendadorNotaria
     * @return Arriendo
     */
    public function setPersoneriaArrendadorNotaria($personeriaArrendadorNotaria)
    {
        $this->personeria_arrendador_notaria = $personeriaArrendadorNotaria;

        return $this;
    }

    /**
     * Get personeria_arrendador_notaria
     *
     * @return string 
     */
    public function getPersoneriaArrendadorNotaria()
    {
        return $this->personeria_arrendador_notaria;
    }

    /**
     * Set personeria_arrendador_lugar
     *
     * @param string $personeriaArrendadorLugar
     * @return Arriendo
     */
    public function setPersoneriaArrendadorLugar($personeriaArrendadorLugar)
    {
        $this->personeria_arrendador_lugar = $personeriaArrendadorLugar;

        return $this;
    }

    /**
     * Get personeria_arrendador_lugar
     *
     * @return string 
     */
    public function getPersoneriaArrendadorLugar()
    {
        return $this->personeria_arrendador_lugar;
    }

    /**
     * Set personeria_arrendatario_fecha
     *
     * @param \DateTime $personeriaArrendatarioFecha
     * @return Arriendo
     */
    public function setPersoneriaArrendatarioFecha($personeriaArrendatarioFecha)
    {
        $this->personeria_arrendatario_fecha = $personeriaArrendatarioFecha;

        return $this;
    }

    /**
     * Get personeria_arrendatario_fecha
     *
     * @return \DateTime 
     */
    public function getPersoneriaArrendatarioFecha()
    {
        return $this->personeria_arrendatario_fecha;
    }

    /**
     * Set personeria_arrendatario_notaria
     *
     * @param string $personeriaArrendatarioNotaria
     * @return Arriendo
     */
    public function setPersoneriaArrendatarioNotaria($personeriaArrendatarioNotaria)
    {
        $this->personeria_arrendatario_notaria = $personeriaArrendatarioNotaria;

        return $this;
    }

    /**
     * Get personeria_arrendatario_notaria
     *
     * @return string 
     */
    public function getPersoneriaArrendatarioNotaria()
    {
        return $this->personeria_arrendatario_notaria;
    }

    /**
     * Set personeria_arrendatario_lugar
     *
     * @param string $personeriaArrendatarioLugar
     * @return Arriendo
     */
    public function setPersoneriaArrendatarioLugar($personeriaArrendatarioLugar)
    {
        $this->personeria_arrendatario_lugar = $personeriaArrendatarioLugar;

        return $this;
    }

    /**
     * Get personeria_arrendatario_lugar
     *
     * @return string 
     */
    public function getPersoneriaArrendatarioLugar()
    {
        return $this->personeria_arrendatario_lugar;
    }
}
