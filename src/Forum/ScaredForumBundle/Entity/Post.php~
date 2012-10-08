<?php

namespace Forum\ScaredForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum\ScaredForumBundle\Entity\Post
 */
class Post
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $text
     */
    private $text;

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
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Post
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
     * @return Post
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
     * @var Forum\ScaredForumBundle\Entity\Forum
     */
    private $forum;

    /**
     * @var Forum\ScaredForumBundle\Entity\Thread
     */
    private $thread;

    /**
     * @var Forum\ScaredForumBundle\Entity\User
     */
    private $author;


    /**
     * Set forum
     *
     * @param Forum\ScaredForumBundle\Entity\Forum $forum
     * @return Post
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
     * Set thread
     *
     * @param Forum\ScaredForumBundle\Entity\Thread $thread
     * @return Post
     */
    public function setThread(\Forum\ScaredForumBundle\Entity\Thread $thread = null)
    {
        $this->thread = $thread;
    
        return $this;
    }

    /**
     * Get thread
     *
     * @return Forum\ScaredForumBundle\Entity\Thread 
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * Set author
     *
     * @param Forum\ScaredForumBundle\Entity\User $author
     * @return Post
     */
    public function setAuthor(\Forum\ScaredForumBundle\Entity\User $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return Forum\ScaredForumBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}