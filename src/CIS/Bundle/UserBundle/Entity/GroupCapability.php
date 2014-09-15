<?php

namespace CIS\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupCapability
 */
class GroupCapability
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
}
