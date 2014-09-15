<?php

namespace CIS\Bundle\CompentencyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 */
class Course
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
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courseCapellaCompentencies;

    /**
     * @var \CIS\Bundle\CompentencyBundle\Entity\Program
     */
    private $program;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $compentencies;


    /**
     * Set name
     *
     * @param string $name
     * @return Course
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
     * @return Course
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
     * Set description
     *
     * @param string $description
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add courseCapellaCompentencies
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\CourseCapellaCompentency $courseCapellaCompentencies
     * @return Course
     */
    public function addCourseCapellaCompentency(\CIS\Bundle\CompentencyBundle\Entity\CourseCapellaCompentency $courseCapellaCompentencies)
    {
        $this->courseCapellaCompentencies[] = $courseCapellaCompentencies;

        return $this;
    }

    /**
     * Remove courseCapellaCompentencies
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\CourseCapellaCompentency $courseCapellaCompentencies
     */
    public function removeCourseCapellaCompentency(\CIS\Bundle\CompentencyBundle\Entity\CourseCapellaCompentency $courseCapellaCompentencies)
    {
        $this->courseCapellaCompentencies->removeElement($courseCapellaCompentencies);
    }

    /**
     * Get courseCapellaCompentencies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourseCapellaCompentencies()
    {
        return $this->courseCapellaCompentencies;
    }

    /**
     * Set program
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Program $program
     * @return Course
     */
    public function setProgram(\CIS\Bundle\CompentencyBundle\Entity\Program $program = null)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return \CIS\Bundle\CompentencyBundle\Entity\Program 
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Add compentencies
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Compentency $compentencies
     * @return Course
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
