<?php

namespace ContratosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jornada
 */
class Jornada
{
    /**
     * @var integer
     */
    private $id;
    
    /**
     * @var integer
     */
    private $dia;
    
    /**
     * @var \DateTime
     */
    private $inicio;

    /**
     * @var \DateTime
     */
    private $fin;


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
     * Set dia
     *
     * @param integer $dia
     * @return Jornada
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return integer 
     */
    public function getDia()
    {
        return $this->dia;
    }
    
    /**
     * Get dia
     *
     * @return integer 
     */
    public function getDiaNombre()
    {
        if($this->dia == 1)
            return "Lunes";
        elseif($this->dia == 2)
            return "Martes";
        elseif($this->dia == 3)
            return "Miércoles";
        elseif($this->dia == 4)
            return "Jueves";
        elseif($this->dia == 5)
            return "Viernes";
        elseif($this->dia == 6)
            return "Sábado";
        elseif($this->dia == 7)
            return "Domingo";
        else
            return "";
    }
    
    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     * @return Jornada
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime 
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     * @return Jornada
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime 
     */
    public function getFin()
    {
        return $this->fin;
    }
}
