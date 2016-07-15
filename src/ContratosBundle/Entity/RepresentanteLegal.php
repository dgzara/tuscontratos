<?php

namespace ContratosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RepresentanteLegal
 */
class RepresentanteLegal
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sexo = 'Hombre';

    /**
     * @var string
     */
    private $nombres;

    /**
     * @var string
     */
    private $apellido_paterno;

    /**
     * @var string
     */
    private $apellido_materno;

    /**
     * @var string
     */
    private $nacionalidad;

    /**
     * @var string
     */
    private $estado_civil;

    /**
     * @var string
     */
    private $rut;

    /**
     * @var string
     */
    private $profesion;

    /**
     * @var string
     */
    private $cargo;
    
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
     * Set sexo
     *
     * @param string $sexo
     * @return RepresentanteLegal
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return RepresentanteLegal
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellido_paterno
     *
     * @param string $apellidoPaterno
     * @return RepresentanteLegal
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellido_paterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellido_paterno
     *
     * @return string 
     */
    public function getApellidoPaterno()
    {
        return $this->apellido_paterno;
    }

    /**
     * Set apellido_materno
     *
     * @param string $apellidoMaterno
     * @return RepresentanteLegal
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellido_materno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellido_materno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellido_materno;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     * @return RepresentanteLegal
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set estado_civil
     *
     * @param string $estadoCivil
     * @return RepresentanteLegal
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estado_civil = $estadoCivil;

        return $this;
    }

    /**
     * Get estado_civil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estado_civil;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return RepresentanteLegal
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     * @return RepresentanteLegal
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string 
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return RepresentanteLegal
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }
}
