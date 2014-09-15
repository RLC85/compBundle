<?php

namespace CIS\Bundle\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\Model\GroupInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


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
     * Constructor
     */
    public function __construct()
    {
        
    }

   
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $groups;


    /**
     * Add groups
     *
     * @param \CIS\Bundle\UserBundle\Entity\Group $groups
     * @return User
     */
    public function addGroup(GroupInterface $group)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \CIS\Bundle\UserBundle\Entity\Group $groups
     */
    public function removeGroup(GroupInterface $group)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
