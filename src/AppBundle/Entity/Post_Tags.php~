<?php

namespace AppBundle\Entity;

/**
 * Post_Tags
 */
class Post_Tags
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $postsId;

    /**
     * @var int
     */
    private $tagsId;
    
    private $Posts;
    private $Tags;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set postsId
     *
     * @param integer $postsId
     *
     * @return Post_Tags
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
     * Set tagsId
     *
     * @param integer $tagsId
     *
     * @return Post_Tags
     */
    public function setTagsId($tagsId)
    {
        $this->tagsId = $tagsId;

        return $this;
    }

    /**
     * Get tagsId
     *
     * @return int
     */
    public function getTagsId()
    {
        return $this->tagsId;
    }

    /**
     * Set posts
     *
     * @param \AppBundle\Entity\Posts $posts
     *
     * @return Post_Tags
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

    /**
     * Set tags
     *
     * @param \AppBundle\Entity\Tags $tags
     *
     * @return Post_Tags
     */
    public function setTags(\AppBundle\Entity\Tags $tags = null)
    {
        $this->Tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return \AppBundle\Entity\Tags
     */
    public function getTags()
    {
        return $this->Tags;
    }
}
