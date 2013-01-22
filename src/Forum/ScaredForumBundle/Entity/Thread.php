<?php

namespace Forum\ScaredForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum\ScaredForumBundle\Entity\Thread
 */
class Thread
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var \DateTime $created_at
     */
    private $created_at;

    /**
     * @var \DateTime $updated_at
     */
    private $updated_at;


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
     * Set name
     *
     * @param string $name
     * @return Thread
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
     * @return Thread
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Thread
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
     * @return Thread
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
     * @var string $manyToOne
     */
    private $manyToOne;

    /**
     * @var string $oneToOne
     */
    private $oneToOne;


    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     * @return Thread
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;

        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }

    /**
     * Set oneToOne
     *
     * @param string $oneToOne
     * @return Thread
     */
    public function setOneToOne($oneToOne)
    {
        $this->oneToOne = $oneToOne;

        return $this;
    }

    /**
     * Get oneToOne
     *
     * @return string
     */
    public function getOneToOne()
    {
        return $this->oneToOne;
    }
    /**
     * @var Forum\ScaredForumBundle\Entity\Forum
     */
    private $forum;

    /**
     * @var Forum\ScaredForumBundle\Entity\User
     */
    private $created_by;


    /**
     * Set forum
     *
     * @param Forum\ScaredForumBundle\Entity\Forum $forum
     * @return Thread
     */
    public function setForum(\Forum\ScaredForumBundle\Entity\Forum $forum = null)
    {
        $this->forum = $forum;

        return $this;
    }

    /**
     * Get forum
     *
     * @return Forum\ScaredForumBundle\Entity\Forum
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * Set created_by
     *
     * @param Forum\ScaredForumBundle\Entity\User $createdBy
     * @return Thread
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

    public function __toString(){
        return $this->getName();
    }
    /**
     * @var integer
     */
    private $posts_count;


    /**
     * Set posts_count
     *
     * @param integer $postsCount
     * @return Thread
     */
    public function setPostsCount($postsCount)
    {
        $this->posts_count = $postsCount;
    
        return $this;
    }

    /**
     * Get posts_count
     *
     * @return integer 
     */
    public function getPostsCount()
    {
        return $this->posts_count;
    }
}