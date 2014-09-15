<?php

namespace CIS\Bundle\CompentencyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entity
 */
class Entity
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $compentencies;


    /**
     * Set name
     *
     * @param string $name
     * @return Entity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Entity
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add compentencies
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Compentency $compentencies
     * @return Entity
     */
    public function addCompentency(\CIS\Bundle\CompentencyBundle\Entity\Compentency $compentencies)
    {
        $this->compentencies[] = $compentencies;

        return $this;
    }

    /**
     * Remove compentencies
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Compentency $compentencies
     */
    public function removeCompentency(\CIS\Bundle\CompentencyBundle\Entity\Compentency $compentencies)
    {
        $this->compentencies->removeElement($compentencies);
    }

    /**
     * Get compentencies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompentencies()
    {
        return $this->compentencies;
    }
}
