<?php

namespace Forum\ScaredForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum\ScaredForumBundle\Entity\Forum
 */
class Forum
{

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $group_id
     */
    private $group_id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ForumGroups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ForumGroups = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set group_id
     *
     * @param integer $groupId
     * @return Forum
     */
    public function setGroupId($groupId)
    {
        $this->group_id = $groupId;
    
        return $this;
    }

    /**
     * Get group_id
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Forum
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
     * Set description
     *
     * @param string $description
     * @return Forum
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
     * Add ForumGroups
     *
     * @param Forum\ScaredForumBundle\Entity\ForumGroups $forumGroups
     * @return Forum
     */
    public function addForumGroup(\Forum\ScaredForumBundle\Entity\ForumGroups $forumGroups)
    {
        $this->ForumGroups[] = $forumGroups;
    
        return $this;
    }

    /**
     * Remove ForumGroups
     *
     * @param Forum\ScaredForumBundle\Entity\ForumGroups $forumGroups
     */
    public function removeForumGroup(\Forum\ScaredForumBundle\Entity\ForumGroups $forumGroups)
    {
        $this->ForumGroups->removeElement($forumGroups);
    }

    /**
     * Get ForumGroups
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getForumGroups()
    {
        return $this->ForumGroups;
    }
    /**
     * @var \DateTime $created_at
     */
    private $created_at;

    /**
     * @var \DateTime $updated_at
     */
    private $updated_at;


    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Forum
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Forum
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    /**
     * @var Forum\ScaredForumBundle\Entity\ForumGroups
     */
    private $address;


    /**
     * Set address
     *
     * @param Forum\ScaredForumBundle\Entity\ForumGroups $address
     * @return Forum
     */
    public function setAddress(\Forum\ScaredForumBundle\Entity\ForumGroups $address = null)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return Forum\ScaredForumBundle\Entity\ForumGroups 
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @var Forum\ScaredForumBundle\Entity\ForumGroups
     */
    private $group;


    /**
     * Set group
     *
     * @param Forum\ScaredForumBundle\Entity\ForumGroups $group
     * @return Forum
     */
    public function setGroup(\Forum\ScaredForumBundle\Entity\ForumGroups $group = null)
    {
        $this->group = $group;
    
        return $this;
    }

    /**
     * Get group
     *
     * @return Forum\ScaredForumBundle\Entity\ForumGroups 
     */
    public function getGroup()
    {
        return $this->group;
    }
    /**
     * @var Forum\ScaredForumBundle\Entity\User
     */
    private $created_by;


    /**
     * Set created_by
     *
     * @param Forum\ScaredForumBundle\Entity\User $createdBy
     * @return Forum
     */
    public function setCreatedBy(\Forum\ScaredForumBundle\Entity\User $createdBy = null)
    {
        $this->created_by = $createdBy;
    
        return $this;
    }

    /**
     * Get created_by
     *
     * @return Forum\ScaredForumBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }
}