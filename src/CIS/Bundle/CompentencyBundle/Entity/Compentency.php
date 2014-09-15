<?php

namespace CIS\Bundle\CompentencyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compentency
 */
class Compentency
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
    private $soverignId;

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
     * @var \CIS\Bundle\CompentencyBundle\Entity\Entity
     */
    private $entity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $courses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $externalCompentencies;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;


    /**
     * Set soverignId
     *
     * @param string $soverignId
     * @return Compentency
     */
    public function setSoverignId($soverignId)
    {
        $this->soverignId = $soverignId;

        return $this;
    }

    /**
     * Get soverignId
     *
     * @return string 
     */
    public function getSoverignId()
    {
        return $this->soverignId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Compentency
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
     * @return Compentency
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
     * @return Compentency
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
     * Set entity
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Entity $entity
     * @return Compentency
     */
    public function setEntity(\CIS\Bundle\CompentencyBundle\Entity\Entity $entity = null)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return \CIS\Bundle\CompentencyBundle\Entity\Entity 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Add courses
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Course $courses
     * @return Compentency
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

    /**
     * Add externalCompentencies
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Compentency $externalCompentencies
     * @return Compentency
     */
    public function addExternalCompentency(\CIS\Bundle\CompentencyBundle\Entity\Compentency $externalCompentencies)
    {
        $this->externalCompentencies[] = $externalCompentencies;

        return $this;
    }

    /**
     * Remove externalCompentencies
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Compentency $externalCompentencies
     */
    public function removeExternalCompentency(\CIS\Bundle\CompentencyBundle\Entity\Compentency $externalCompentencies)
    {
        $this->externalCompentencies->removeElement($externalCompentencies);
    }

    /**
     * Get externalCompentencies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExternalCompentencies()
    {
        return $this->externalCompentencies;
    }

    /**
     * Add tags
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Tag $tags
     * @return Compentency
     */
    public function addTag(\CIS\Bundle\CompentencyBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \CIS\Bundle\CompentencyBundle\Entity\Tag $tags
     */
    public function removeTag(\CIS\Bundle\CompentencyBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}
