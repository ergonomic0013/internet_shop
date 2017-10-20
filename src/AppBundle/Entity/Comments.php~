<?php

namespace AppBundle\Entity;

/**
 * Comments
 */
class Comments
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $postsId;

    /**
     * @var int
     */
    private $usersId;

    /**
     * @var int
     */
    private $parentId;

    /**
     * @var string
     */
    private $depth;
    /**
     * Get id
     *
     * @return int
     */
     private $Users;
     private $Posts;
     
     
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Comments
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Comments
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set postsId
     *
     * @param integer $postsId
     *
     * @return Comments
     */
    public function setPostsId($postsId)
    {
        $this->postsId = $postsId;

        return $this;
    }

    /**
     * Get postsId
     *
     * @return int
     */
    public function getPostsId()
    {
        return $this->postsId;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Comments
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get usersId
     *
     * @return int
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Comments
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set depth
     *
     * @param string $depth
     *
     * @return Comments
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set users
     *
     * @param \AppBundle\Entity\Users $users
     *
     * @return Comments
     */
    public function setUsers(\AppBundle\Entity\Users $users = null)
    {
        $this->Users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->Users;
    }

    /**
     * Set posts
     *
     * @param \AppBundle\Entity\Posts $posts
     *
     * @return Comments
     */
    public function setPosts(\AppBundle\Entity\Posts $posts = null)
    {
        $this->Posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return \AppBundle\Entity\Posts
     */
    public function getPosts()
    {
        return $this->Posts;
    }
}
