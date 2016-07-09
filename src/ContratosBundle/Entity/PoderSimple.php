<?php

namespace ContratosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoderSimple
 */
class PoderSimple
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
    private $otorgante_persona;

    /**
     * @var string
     */
    private $otorgante_natural_sexo = 'Hombre';

    /**
     * @var string
     */
    private $otorgante_natural_nombres;

    /**
     * @var string
     */
    private $otorgante_natural_apellido_paterno;

    /**
     * @var string
     */
    private $otorgante_natural_apellido_materno;

    /**
     * @var string
     */
    private $otorgante_natural_nacionalidad;

    /**
     * @var string
     */
    private $otorgante_natural_estado_civil;

    /**
     * @var string
     */
    private $otorgante_natural_profesion;

    /**
     * @var string
     */
    private $otorgante_natural_rut;

    /**
     * @var string
     */
    private $otorgante_natural_domicilio;

    /**
     * @var string
     */
    private $otorgante_natural_region;

    /**
     * @var string
     */
    private $otorgante_juridica_razon;

    /**
     * @var string
     */
    private $otorgante_juridica_giro;

    /**
     * @var string
     */
    private $otorgante_juridica_rut;

    /**
     * @var string
     */
    private $otorgante_juridica_domicilio;

    /**
     * @var string
     */
    private $otorgante_juridica_region;

    /**
     * @var string
     */
    private $recibido_natural_sexo = 'Hombre';

    /**
     * @var string
     */
    private $recibido_natural_nombres;

    /**
     * @var string
     */
    private $recibido_natural_apellido_paterno;

    /**
     * @var string
     */
    private $recibido_natural_apellido_materno;

    /**
     * @var string
     */
    private $recibido_natural_rut;

    /**
     * @var string
     */
    private $motivo;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $otorgante_natural_comuna;

    /**
     * @var \ContratosBundle\Entity\Comuna
     */
    private $otorgante_juridica_comuna;

    /**
     * @var string
     */
    private $otorgante_juridica_sexo = 'Hombre';

    /**
     * @var string
     */
    private $otorgante_juridica_nombres;

    /**
     * @var string
     */
    private $otorgante_juridica_apellido_paterno;

    /**
     * @var string
     */
    private $otorgante_juridica_apellido_materno;

    /**
     * @var string
     */
    private $otorgante_juridica_nacionalidad;

    /**
     * @var string
     */
    private $otorgante_juridica_persona_rut;

    /**
     * @var string
     */
    private $otorgante_juridica_cargo;

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
     * @return PoderSimple
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
     * @return PoderSimple
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
     * Set otorgante_persona
     *
     * @param string $otorgantePersona
     * @return PoderSimple
     */
    public function setOtorgantePersona($otorgantePersona)
    {
        $this->otorgante_persona = $otorgantePersona;

        return $this;
    }

    /**
     * Get otorgante_persona
     *
     * @return string 
     */
    public function getOtorgantePersona()
    {
        return $this->otorgante_persona;
    }

    /**
     * Set otorgante_natural_sexo
     *
     * @param string $otorganteNaturalSexo
     * @return PoderSimple
     */
    public function setOtorganteNaturalSexo($otorganteNaturalSexo)
    {
        $this->otorgante_natural_sexo = $otorganteNaturalSexo;

        return $this;
    }

    /**
     * Get otorgante_natural_sexo
     *
     * @return string 
     */
    public function getOtorganteNaturalSexo()
    {
        return $this->otorgante_natural_sexo;
    }

    /**
     * Get otorgante_natural_nombres
     *
     * @return string 
     */
    public function getOtorganteNatural()
    {
        return $this->otorgante_natural_nombres.' '.$this->otorgante_natural_apellido_paterno.' '.$this->otorgante_natural_apellido_materno;
    }
    
    /**
     * Set otorgante_natural_nombres
     *
     * @param string $otorganteNaturalNombres
     * @return PoderSimple
     */
    public function setOtorganteNaturalNombres($otorganteNaturalNombres)
    {
        $this->otorgante_natural_nombres = $otorganteNaturalNombres;

        return $this;
    }

    /**
     * Get otorgante_natural_nombres
     *
     * @return string 
     */
    public function getOtorganteNaturalNombres()
    {
        return $this->otorgante_natural_nombres;
    }

    /**
     * Set otorgante_natural_apellido_paterno
     *
     * @param string $otorganteNaturalApellidoPaterno
     * @return PoderSimple
     */
    public function setOtorganteNaturalApellidoPaterno($otorganteNaturalApellidoPaterno)
    {
        $this->otorgante_natural_apellido_paterno = $otorganteNaturalApellidoPaterno;

        return $this;
    }

    /**
     * Get otorgante_natural_apellido_paterno
     *
     * @return string 
     */
    public function getOtorganteNaturalApellidoPaterno()
    {
        return $this->otorgante_natural_apellido_paterno;
    }

    /**
     * Set otorgante_natural_apellido_materno
     *
     * @param string $otorganteNaturalApellidoMaterno
     * @return PoderSimple
     */
    public function setOtorganteNaturalApellidoMaterno($otorganteNaturalApellidoMaterno)
    {
        $this->otorgante_natural_apellido_materno = $otorganteNaturalApellidoMaterno;

        return $this;
    }

    /**
     * Get otorgante_natural_apellido_materno
     *
     * @return string 
     */
    public function getOtorganteNaturalApellidoMaterno()
    {
        return $this->otorgante_natural_apellido_materno;
    }

    /**
     * Set otorgante_natural_nacionalidad
     *
     * @param string $otorganteNaturalNacionalidad
     * @return PoderSimple
     */
    public function setOtorganteNaturalNacionalidad($otorganteNaturalNacionalidad)
    {
        $this->otorgante_natural_nacionalidad = $otorganteNaturalNacionalidad;

        return $this;
    }

    /**
     * Get otorgante_natural_nacionalidad
     *
     * @return string 
     */
    public function getOtorganteNaturalNacionalidad()
    {
        return $this->otorgante_natural_nacionalidad;
    }

    /**
     * Set otorgante_natural_estado_civil
     *
     * @param string $otorganteNaturalEstadoCivil
     * @return PoderSimple
     */
    public function setOtorganteNaturalEstadoCivil($otorganteNaturalEstadoCivil)
    {
        $this->otorgante_natural_estado_civil = $otorganteNaturalEstadoCivil;

        return $this;
    }

    /**
     * Get otorgante_natural_estado_civil
     *
     * @return string 
     */
    public function getOtorganteNaturalEstadoCivil()
    {
        return $this->otorgante_natural_estado_civil;
    }

    /**
     * Set otorgante_natural_profesion
     *
     * @param string $otorganteNaturalProfesion
     * @return PoderSimple
     */
    public function setOtorganteNaturalProfesion($otorganteNaturalProfesion)
    {
        $this->otorgante_natural_profesion = $otorganteNaturalProfesion;

        return $this;
    }

    /**
     * Get otorgante_natural_profesion
     *
     * @return string 
     */
    public function getOtorganteNaturalProfesion()
    {
        return $this->otorgante_natural_profesion;
    }

    /**
     * Set otorgante_natural_rut
     *
     * @param string $otorganteNaturalRut
     * @return PoderSimple
     */
    public function setOtorganteNaturalRut($otorganteNaturalRut)
    {
        $this->otorgante_natural_rut = $otorganteNaturalRut;

        return $this;
    }

    /**
     * Get otorgante_natural_rut
     *
     * @return string 
     */
    public function getOtorganteNaturalRut()
    {
        return $this->otorgante_natural_rut;
    }

    /**
     * Set otorgante_natural_domicilio
     *
     * @param string $otorganteNaturalDomicilio
     * @return PoderSimple
     */
    public function setOtorganteNaturalDomicilio($otorganteNaturalDomicilio)
    {
        $this->otorgante_natural_domicilio = $otorganteNaturalDomicilio;

        return $this;
    }

    /**
     * Get otorgante_natural_domicilio
     *
     * @return string 
     */
    public function getOtorganteNaturalDomicilio()
    {
        return $this->otorgante_natural_domicilio;
    }

    /**
     * Set otorgante_natural_region
     *
     * @param string $otorganteNaturalRegion
     * @return PoderSimple
     */
    public function setOtorganteNaturalRegion($otorganteNaturalRegion)
    {
        $this->otorgante_natural_region = $otorganteNaturalRegion;

        return $this;
    }

    /**
     * Get otorgante_natural_region
     *
     * @return string 
     */
    public function getOtorganteNaturalRegion()
    {
        return $this->otorgante_natural_region;
    }

    /**
     * Set otorgante_juridica_razon
     *
     * @param string $otorganteJuridicaRazon
     * @return PoderSimple
     */
    public function setOtorganteJuridicaRazon($otorganteJuridicaRazon)
    {
        $this->otorgante_juridica_razon = $otorganteJuridicaRazon;

        return $this;
    }

    /**
     * Get otorgante_juridica_razon
     *
     * @return string 
     */
    public function getOtorganteJuridicaRazon()
    {
        return $this->otorgante_juridica_razon;
    }

    /**
     * Set otorgante_juridica_giro
     *
     * @param string $otorganteJuridicaGiro
     * @return PoderSimple
     */
    public function setOtorganteJuridicaGiro($otorganteJuridicaGiro)
    {
        $this->otorgante_juridica_giro = $otorganteJuridicaGiro;

        return $this;
    }

    /**
     * Get otorgante_juridica_giro
     *
     * @return string 
     */
    public function getOtorganteJuridicaGiro()
    {
        return $this->otorgante_juridica_giro;
    }

    /**
     * Set otorgante_juridica_rut
     *
     * @param string $otorganteJuridicaRut
     * @return PoderSimple
     */
    public function setOtorganteJuridicaRut($otorganteJuridicaRut)
    {
        $this->otorgante_juridica_rut = $otorganteJuridicaRut;

        return $this;
    }

    /**
     * Get otorgante_juridica_rut
     *
     * @return string 
     */
    public function getOtorganteJuridicaRut()
    {
        return $this->otorgante_juridica_rut;
    }

    /**
     * Set otorgante_juridica_domicilio
     *
     * @param string $otorganteJuridicaDomicilio
     * @return PoderSimple
     */
    public function setOtorganteJuridicaDomicilio($otorganteJuridicaDomicilio)
    {
        $this->otorgante_juridica_domicilio = $otorganteJuridicaDomicilio;

        return $this;
    }

    /**
     * Get otorgante_juridica_domicilio
     *
     * @return string 
     */
    public function getOtorganteJuridicaDomicilio()
    {
        return $this->otorgante_juridica_domicilio;
    }

    /**
     * Set otorgante_juridica_region
     *
     * @param string $otorganteJuridicaRegion
     * @return PoderSimple
     */
    public function setOtorganteJuridicaRegion($otorganteJuridicaRegion)
    {
        $this->otorgante_juridica_region = $otorganteJuridicaRegion;

        return $this;
    }

    /**
     * Get otorgante_juridica_region
     *
     * @return string 
     */
    public function getOtorganteJuridicaRegion()
    {
        return $this->otorgante_juridica_region;
    }

    /**
     * Set recibido_natural_sexo
     *
     * @param string $recibidoNaturalSexo
     * @return PoderSimple
     */
    public function setRecibidoNaturalSexo($recibidoNaturalSexo)
    {
        $this->recibido_natural_sexo = $recibidoNaturalSexo;

        return $this;
    }

    /**
     * Get recibido_natural_sexo
     *
     * @return string 
     */
    public function getRecibidoNaturalSexo()
    {
        return $this->recibido_natural_sexo;
    }

    /**
     * Set recibido_natural_nombres
     *
     * @param string $recibidoNaturalNombres
     * @return PoderSimple
     */
    public function setRecibidoNaturalNombres($recibidoNaturalNombres)
    {
        $this->recibido_natural_nombres = $recibidoNaturalNombres;

        return $this;
    }

    /**
     * Get recibido_natural_nombres
     *
     * @return string 
     */
    public function getRecibidoNaturalNombres()
    {
        return $this->recibido_natural_nombres;
    }

    /**
     * Set recibido_natural_apellido_paterno
     *
     * @param string $recibidoNaturalApellidoPaterno
     * @return PoderSimple
     */
    public function setRecibidoNaturalApellidoPaterno($recibidoNaturalApellidoPaterno)
    {
        $this->recibido_natural_apellido_paterno = $recibidoNaturalApellidoPaterno;

        return $this;
    }

    /**
     * Get recibido_natural_apellido_paterno
     *
     * @return string 
     */
    public function getRecibidoNaturalApellidoPaterno()
    {
        return $this->recibido_natural_apellido_paterno;
    }

    /**
     * Set recibido_natural_apellido_materno
     *
     * @param string $recibidoNaturalApellidoMaterno
     * @return PoderSimple
     */
    public function setRecibidoNaturalApellidoMaterno($recibidoNaturalApellidoMaterno)
    {
        $this->recibido_natural_apellido_materno = $recibidoNaturalApellidoMaterno;

        return $this;
    }

    /**
     * Get recibido_natural_apellido_materno
     *
     * @return string 
     */
    public function getRecibidoNaturalApellidoMaterno()
    {
        return $this->recibido_natural_apellido_materno;
    }

    /**
     * Set recibido_natural_rut
     *
     * @param string $recibidoNaturalRut
     * @return PoderSimple
     */
    public function setRecibidoNaturalRut($recibidoNaturalRut)
    {
        $this->recibido_natural_rut = $recibidoNaturalRut;

        return $this;
    }

    /**
     * Get recibido_natural_rut
     *
     * @return string 
     */
    public function getRecibidoNaturalRut()
    {
        return $this->recibido_natural_rut;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     * @return PoderSimple
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set otorgante_natural_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $otorganteNaturalComuna
     * @return PoderSimple
     */
    public function setOtorganteNaturalComuna(\ContratosBundle\Entity\Comuna $otorganteNaturalComuna = null)
    {
        $this->otorgante_natural_comuna = $otorganteNaturalComuna;

        return $this;
    }

    /**
     * Get otorgante_natural_comuna
     *
     * @return \ContratosBundle\Entity\Comuna 
     */
    public function getOtorganteNaturalComuna()
    {
        return $this->otorgante_natural_comuna;
    }

    /**
     * Set otorgante_juridica_comuna
     *
     * @param \ContratosBundle\Entity\Comuna $otorganteJuridicaComuna
     * @return PoderSimple
     */
    public function setOtorganteJuridicaComuna(\ContratosBundle\Entity\Comuna $otorganteJuridicaComuna = null)
    {
        $this->otorgante_juridica_comuna = $otorganteJuridicaComuna;

        return $this;
    }

    /**
     * Get otorgante_juridica_comuna
     *
     * @return \ContratosBundle\Entity\Comuna 
     */
    public function getOtorganteJuridicaComuna()
    {
        return $this->otorgante_juridica_comuna;
    }

    /**
     * Set otorgante_juridica_sexo
     *
     * @param string $otorganteJuridicaSexo
     * @return PoderSimple
     */
    public function setOtorganteJuridicaSexo($otorganteJuridicaSexo)
    {
        $this->otorgante_juridica_sexo = $otorganteJuridicaSexo;

        return $this;
    }

    /**
     * Get otorgante_juridica_sexo
     *
     * @return string 
     */
    public function getOtorganteJuridicaSexo()
    {
        return $this->otorgante_juridica_sexo;
    }

    /**
     * Set otorgante_juridica_nombres
     *
     * @param string $otorganteJuridicaNombres
     * @return PoderSimple
     */
    public function setOtorganteJuridicaNombres($otorganteJuridicaNombres)
    {
        $this->otorgante_juridica_nombres = $otorganteJuridicaNombres;

        return $this;
    }

    /**
     * Get otorgante_juridica_nombres
     *
     * @return string 
     */
    public function getOtorganteJuridicaNombres()
    {
        return $this->otorgante_juridica_nombres;
    }

    /**
     * Set otorgante_juridica_apellido_paterno
     *
     * @param string $otorganteJuridicaApellidoPaterno
     * @return PoderSimple
     */
    public function setOtorganteJuridicaApellidoPaterno($otorganteJuridicaApellidoPaterno)
    {
        $this->otorgante_juridica_apellido_paterno = $otorganteJuridicaApellidoPaterno;

        return $this;
    }

    /**
     * Get otorgante_juridica_apellido_paterno
     *
     * @return string 
     */
    public function getOtorganteJuridicaApellidoPaterno()
    {
        return $this->otorgante_juridica_apellido_paterno;
    }

    /**
     * Set otorgante_juridica_apellido_materno
     *
     * @param string $otorganteJuridicaApellidoMaterno
     * @return PoderSimple
     */
    public function setOtorganteJuridicaApellidoMaterno($otorganteJuridicaApellidoMaterno)
    {
        $this->otorgante_juridica_apellido_materno = $otorganteJuridicaApellidoMaterno;

        return $this;
    }

    /**
     * Get otorgante_juridica_apellido_materno
     *
     * @return string 
     */
    public function getOtorganteJuridicaApellidoMaterno()
    {
        return $this->otorgante_juridica_apellido_materno;
    }

    /**
     * Set otorgante_juridica_nacionalidad
     *
     * @param string $otorganteJuridicaNacionalidad
     * @return PoderSimple
     */
    public function setOtorganteJuridicaNacionalidad($otorganteJuridicaNacionalidad)
    {
        $this->otorgante_juridica_nacionalidad = $otorganteJuridicaNacionalidad;

        return $this;
    }

    /**
     * Get otorgante_juridica_nacionalidad
     *
     * @return string 
     */
    public function getOtorganteJuridicaNacionalidad()
    {
        return $this->otorgante_juridica_nacionalidad;
    }

    /**
     * Set otorgante_juridica_persona_rut
     *
     * @param string $otorganteJuridicaPersonaRut
     * @return PoderSimple
     */
    public function setOtorganteJuridicaPersonaRut($otorganteJuridicaPersonaRut)
    {
        $this->otorgante_juridica_persona_rut = $otorganteJuridicaPersonaRut;

        return $this;
    }

    /**
     * Get otorgante_juridica_persona_rut
     *
     * @return string 
     */
    public function getOtorganteJuridicaPersonaRut()
    {
        return $this->otorgante_juridica_persona_rut;
    }

    /**
     * Set otorgante_juridica_cargo
     *
     * @param string $otorganteJuridicaCargo
     * @return PoderSimple
     */
    public function setOtorganteJuridicaCargo($otorganteJuridicaCargo)
    {
        $this->otorgante_juridica_cargo = $otorganteJuridicaCargo;

        return $this;
    }

    /**
     * Get otorgante_juridica_cargo
     *
     * @return string 
     */
    public function getOtorganteJuridicaCargo()
    {
        return $this->otorgante_juridica_cargo;
    }
}
