<?php

namespace ContratosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comuna
 */
class Comuna
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;


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
     * Get nombre
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->nombre;
    }
    
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Comuna
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
