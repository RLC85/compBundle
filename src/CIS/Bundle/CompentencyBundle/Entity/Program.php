<?php

namespace CIS\Bundle\CompentencyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Program
 */
class Program
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
    private $courses;


    /**
     * Set name
     *
     * @param string $name
     * @return Program
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
     * @return Program
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
     * Add courses
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Course $courses
     * @return Program
     */
    public function addCourse(\CIS\Bundle\CompentencyBundle\Entity\Course $courses)
    {
        $this->courses[] = $courses;

        return $this;
    }

    /**
     * Remove courses
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Course $courses
     */
    public function removeCourse(\CIS\Bundle\CompentencyBundle\Entity\Course $courses)
    {
        $this->courses->removeElement($courses);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->courses;
    }
}
